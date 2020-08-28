<?php
function activate_LAT($fn, $x, $ADMINAREA = false)
{
	if (!empty($fn) && get_LTA_Status()) {
		$rootDir = dirname(__FILE__) . "/..";
		if ($ADMINAREA) define('PREPEND_PATH', '../');
		include_once("$rootDir/LAT/" . $fn . "_lat.php");
		return true;
	}
	return false;
}

//change to FALSE if you want back to appgini default
function get_LTA_Status($LAT_enable = true)
{
	if (!function_exists('getMemberInfo')) {
		$LAT_enable = false;
	}
	if ($LAT_enable) check_LTA_installed();
	return $LAT_enable;
}

//hacer un hash al file y verificar si cambió.
function check_LTA_installed()
{
	$md5_file = dirname(__FILE__) . '/lat.md5';
	$ver_file = dirname(__FILE__) . '/../header.php';
	$prevMD5 = file_get_contents($md5_file);
	$thisMD5 = hash_file('md5',$ver_file);
	if ($thisMD5 == $prevMD5) {
		$setupAlreadyRun = true;
	} else {
		include("setup/setup.php");

		if ($fp = @fopen($md5_file, 'w')) {
			fwrite($fp, $thisMD5);
			fclose($fp);
		}
	}
	return $setupAlreadyRun;
}

get_LTA_Status();
