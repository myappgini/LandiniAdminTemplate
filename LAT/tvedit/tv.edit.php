<?php

$currDir = dirname(__FILE__);
$base_dir = realpath("{$currDir}/../..");
if (!function_exists('makeSafe')) {
    include("$base_dir/lib.php");
}

if (!isset($_POST['tn']) && !in_array($_POST['tn'], array_keys(getTableList()))) {
    /* invalid table or permission */
    echo '{"results":[{"id":"","text":"Invalid table"}],"more":false,"elapsed":0}';
    exit;
}
$tn = makeSafe($_POST['tn']);
$bu = $tn . '_before_update';
if (!function_exists($bu)) {
    include("$base_dir/hooks/$tn.php");
}

$selected_id = makeSafe($_POST['id']);
$fn = explode('-', $_POST['fn']);
$data[$fn[1]] = makeSafe($_POST['value']);


$arrPerm = getTablePermissions($tn);
$ownerGroupID = sqlValue("select groupID from membership_userrecords where tableName='{$tn}' and pkValue='" . makeSafe($selected_id) . "'");
$ownerMemberID = sqlValue("select lcase(memberID) from membership_userrecords where tableName='{$tn}' and pkValue='" . makeSafe($selected_id) . "'");
if (($arrPerm[3] == 1 && $ownerMemberID == getLoggedMemberID()) || ($arrPerm[3] == 2 && $ownerGroupID == getLoggedGroupID()) || $arrPerm[3] == 3) { // allow update?
    // update allowed, so continue ...
} else {
    return false;
}
$data['selectedID'] = $selected_id;
// hook: tn_before_update
if (function_exists($bu)) {
    $args = array();
    if (!$bu($data, getMemberInfo(), $args)) {
        return false;
    }
}

unset($data['selectedID']);

$o = array('silentErrors' => true);
//TODO: update array values!!

foreach ($data as $key => $value) {
    if (empty($value)){
        $value='NULL';
    }
    $set[]= "`{$key}` = '{$value}'" ;
}

$set_data = implode(",",$set);

$update = "update `{$tn}` set {$set_data}  where `id`='" . makeSafe($selected_id) . "'";



sql($update, $o);

if ($o['error'] != '') {
    echo $o['error'];
    echo '<a href="' . $tn . '_view.php?SelectedID=' . urlencode($selected_id) . "\">{$Translation['< back']}</a>";
    exit;
}


// hook: orders_after_update
$au = $tn . '_after_update';
if (function_exists($au)) {
    $res = sql("SELECT * FROM `{$tn}` WHERE `id`='{$selected_id}' LIMIT 1", $eo);
    if ($row = db_fetch_assoc($res)) {
        $data = array_map('makeSafe', $row);
    }
    $data['selectedID'] = $data['id'];
    $args = array();
    if (!$au($data, getMemberInfo(), $args)) {
        return;
    }
}

// mm: update ownership data
sql("update membership_userrecords set dateUpdated='" . time() . "' where tableName='{$tn}' and pkValue='" . makeSafe($selected_id) . "'", $eo);

//$data[]=["id",$selected_id];
echo $data[$fn[1]];
return;
