<?php
$currDir=dirname(__FILE__);
include("$currDir/defaultLang.php");
include("$currDir/language.php");
include("$currDir/lib.php");
@include("$currDir/hooks/todoList.php");
include("$currDir/todoList_dml.php");

// mm: can the current member access this page?
$perm=getTablePermissions('todoList');
if(!$perm[0]) {
    echo error_message($Translation['tableAccessDenied'], false);
    echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
    exit;
}

$x = new DataList;
$x->TableName = "todoList";
