<?php
include("../../lib.php");
include('lat_class.php');
$lat_class = new lat_class(array(
	'title' => 'Landini Admin Template',
	'name' => 'LAT'
));
$rootDir = dirname(__FILE__)."/../../";
//-------------------------------------------------------------------------------------
//path check 
try {

	$path = rtrim(trim($rootDir), '\\/');
	if (!is_dir($path)) {
		throw new RuntimeException('Invalid path');
	}

	if (!(file_exists("$path/lib.php") && file_exists("$path/db.php") && file_exists("$path/index.php"))) {
		throw new RuntimeException('The given path is not a valid AppGini project path');
	}

	if (!is_writable($path . "/hooks")) {
		throw new RuntimeException('The hooks folder of the given path is not writable');
	}

	if (!is_writable($path . "/resources")) {
		throw new RuntimeException('The resources folder of the given path is not writable');
	}
} catch (RuntimeException $e) {
	echo "<br>" . $lat_class->error_message($e->getMessage());
	exit;
}

?>
<!-- 
<h1 >We are cleaning the house soon you will be redirected</h1>
<h4>Progress log</h4> -->

<?php
$i=1;
$code = '<?php include(dirname(__FILE__) . "/../LAT/setup_lat.php");?>';
$file_path = "$path/hooks/__global.php";
$res = $lat_class->add_to_file($file_path, false, $code);
//echo $res?"ok<br>":"warning-$i<br>";

$files = [
	'admin/incHeader' => ['header',"true"],
	'admin/incFooter' => ['footer',"true"],
	'header' => ['header',"false"],
	'footer' => ['footer',"false"],
	'home' => ['home',"false"]
];
foreach ($files as $fn => $call) {
	$i += 1;
	$code = '<?php if (activate_LAT("' . $call[0] . '",$x,' . $call[1] . ')) return; ?>';
	$file_path = $path . "/$fn.php";
	$res = $lat_class->add_to_file($file_path, $extra_function, $code);
	//echo $res?"<br>":"warning-$i<br>";
};
