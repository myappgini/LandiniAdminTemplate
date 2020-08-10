<?php

//TODO: controlar el funcionamiento de esta función para que no tenga un error.
$cjson = file_get_contents('config.json',true);
$cjson = json_decode($cjson,true);

$LAT_globals = $cjson[0]['Globals'];
$LAT_group_ico = $cjson[1]['Icon Groups'];
$ico = "fa fa-table"; //default ico
