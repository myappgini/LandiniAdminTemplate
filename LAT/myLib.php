<?php

/**
 * function to get a row with formated values from a table. 
 * 
 * @param $table_name required
 * table name to get data
 * 
 * @param $where_id optional
 * is a string to indicate the select id from record use:
 * example " tablename.id=1", if empty get whole data from table
 * 
 * @return
 * db_fetch from data result
 */
function getDataTable($table_name, $id = false, $debug = FALSE)
{
    $table_from = get_sql_from($table_name);
    $table_fields = get_sql_fields($table_name);
    $where_id = "";
    if ($id) {
        $table_key_fieldName = getPKFieldName($table_name);
        $where_id = "AND `$table_name`.`$table_key_fieldName`='$id'";
    }

    $sql = "SELECT {$table_fields} FROM {$table_from} " . $where_id;
    if ($debug) {
        echo Notification::placeholder();
        echo Notification::show(array(
            'message' => $sql,
            'class' => 'warning',
            'dismiss_seconds' => 0
        ));
        echo ob_get_clean();
        exit;
    }
    $res = sql($sql, $eo);
    return db_fetch_assoc($res);
}

/**
 * function to get a row un-formated values from a table. 
 * 
 * @param $table_name required
 * table name to get data
 * 
 * @param $where_id optional
 * is a string to indicate the select id from record use:
 * example " tablename.id=1", if empty get whole data from table
 * 
 * @return
 * db_fetch from data result
 */
function getDataTable_Values($table_name, $where_id = "", $debug = FALSE)
{
    $where_id = "" ? "" : " where 1=1 AND " . $where_id;
    $sql = "SELECT * FROM {$table_name} " . $where_id;
    if ($debug) {
        echo "<br>" . $sql . "<br>";
    }
    $res = sql($sql, $eo);
    return db_fetch_assoc($res);
}


function getTotCol($parameters, $fieldToSUM)
{
    //return tot value
    $sumQuery = "select sum(`" . $parameters['ChildTable'] . "`.`" . $fieldToSUM . "`) from " . $parameters['ChildTable'] . " where `" . $parameters['ChildLookupField'] . "` = '" . $parameters['SelectedID'] . "'";
    $res = sqlValue($sumQuery);
    return $res;
}

function updateSqlViews()
{
    $dir = dirname(__FILE__) . "/hooks/SQL_Views";
    $views = array_diff(scandir($dir), array('.', '..'));
    foreach ($views as $sql) {
        $res = sql(file_get_contents("$dir/$sql"), $eo);
    }
}

function importData()
{
    $dir = dirname(__FILE__) . "/data";
    $views = array_diff(scandir($dir), array('.', '..'));
    foreach ($views as $sql) {
        $res = sql(file_get_contents("$dir/$sql"), $eo);
    }
}

function retCountryData(&$country, &$country_values, $id)
{
    $where_id = "AND countries.id = $id";
    $country = getDataTable('countries', $where_id);
    $country_values = getDataTable_Values('countries', $where_id);
}

function openpdf($file, $filename)
{

    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($file));
    header('Accept-Ranges: bytes');
    @readfile($file);
    return;
}

function makePdf($html_code, $file)
{

    // $mpdf = new \Mpdf\Mpdf([
    // 'margin_left' => 5,
    // 'margin_right' => 5,
    // 'margin_top' => 48,
    // 'margin_bottom' => 25,
    // 'margin_header' => 10,
    // 'margin_footer' => 10
    // ]);

    // $mpdf->SetProtection(array('print'));
    // $mpdf->SetTitle("Piattaforma Digitale Management System - Order");
    // $mpdf->SetAuthor("PDSM");
    // $mpdf->SetWatermarkText("PDMS");
    // $mpdf->showWatermarkText = true;
    // $mpdf->watermark_font = 'DejaVuSansCondensed';
    // $mpdf->watermarkTextAlpha = 0.1;
    // $mpdf->SetDisplayMode('fullpage');
    // $mpdf->WriteHTML($html_code);
    // $mpdf->Output($file, 'F');

    // return;
}

/**
 * A sweet interval formatting, will use the two biggest interval parts.
 * On small intervals, you get minutes and seconds.
 * On big intervals, you get months and days.
 * Only the two biggest parts are used.
 *
 * @param DateTime $start
 * @param DateTime|null $end
 * @return string
 */
function formatDateDiff($start, $end = null)
{
    if (!($start instanceof DateTime)) {
        $start = new DateTime($start);
    }

    if ($end === null) {
        $end = new DateTime();
    }

    if (!($end instanceof DateTime)) {
        $end = new DateTime($end);
    }

    $interval = $end->diff($start);
    $doPlural = function ($nb, $str) {
        return $nb > 1 ? $str . 's' : $str;
    }; // adds plurals

    $format = array();
    if ($interval->y !== 0) {
        $format[] = "%y " . $doPlural($interval->y, "year");
    }
    if ($interval->m !== 0) {
        $format[] = "%m " . $doPlural($interval->m, "month");
    }
    if ($interval->d !== 0) {
        $format[] = "%d " . $doPlural($interval->d, "day");
    }
    if ($interval->h !== 0) {
        $format[] = "%h " . $doPlural($interval->h, "hour");
    }
    if ($interval->i !== 0) {
        $format[] = "%i " . $doPlural($interval->i, "minute");
    }
    if ($interval->s !== 0) {
        if (!count($format)) {
            return "less than a minute ago";
        } else {
            $format[] = "%s " . $doPlural($interval->s, "second");
        }
    }

    // We use the two biggest parts
    if (count($format) > 1) {
        $format = array_shift($format) . " and " . array_shift($format);
    } else {
        $format = array_pop($format);
    }

    // Prepend 'since ' or whatever you like

    $result = array(
        "human" => $interval->format($format),
        "format" => $format,
        "value" => (array) $interval
    );

    return $result;
}
