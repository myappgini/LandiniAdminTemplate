<?php
if (!isset($Translation)) {
  $currDir = dirname(__FILE__);
	include("{$currDir}/../defaultLang.php");
	include("{$currDir}/../language.php");
}
include_once("header.php");
$mi = getMemberInfo();

if ($mi['group'] === 'anonymous'){ include('home_guest.php');}
if ($mi['group'] === 'Admins'){ include('home_admins.php');}
if ($mi['group'] === 'Users'){ include('home_users.php');}

include_once("footer.php"); 
?>
