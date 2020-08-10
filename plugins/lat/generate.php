<?php

include(dirname(__FILE__) . "/header.php");
$lat_class = new lat_class(array(
	'title' => 'Landini Admin Template',
	'name' => 'LAT',
	'logo' => 'template.png',
	'output_path' => $_REQUEST['path']
));

// validate project name
if (!isset($_GET['axp']) || !preg_match('/^[a-f0-9]{32}$/i', $_GET['axp'])) {
	echo "<br>" . $lat_class->error_message('Project file not found.');
	exit;
}
$projectFile = '';
$xmlFile = $lat_class->get_xml_file($_GET['axp'], $projectFile);

//-------------------------------------------------------------------------------------
//path check 
try {
	if (!isset($_POST['path'])) {
		throw new RuntimeException('This page has expired');
	}

	$path = rtrim(trim($_POST['path']), '\\/');
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
//-------------------------------------------------------------------------------------

$write_to_hooks = ($_REQUEST['dont_write_to_hooks'] == 1 ? false : true);

?>

<div class="bs-docs-section row">
	<h1 class="page-header"><img src="template.png" style="height: 1em;"> AdminLTE tenmplate for AppGini</h1>
	<p class="lead"><a href="./index.php">Projects</a> > <a href="./project.php?axp=<?php echo $_GET['axp']; ?>"><?php echo substr($projectFile, 0, strrpos($projectFile, ".")); ?></a> > <a href="./output-folder.php?axp=<?php echo $_GET['axp'] ?>"> Select output folder</a> > Enabling Landini AdminLTE
	</p>

</div>

<h4>Progress log</h4>

<?php
$lat_class->progress_log->add("Output folder: $path", 'text-info');

//coping resources folders

$lat_class->progress_log->ok();
$lat_class->progress_log->line();

//coping files
$lat_class->progress_log->add("<b>Copying new files for '" . substr($projectFile, 0, strrpos($projectFile, ".")) . "' project:</b>");

$source_class = dirname(__FILE__) . '/app-resources/config.json';
$dest_class = $path . '/LAT/config.json';
$lat_class->copy_file($source_class, $dest_class, true);

$extra_function = false;
$code = '<?php include(dirname(__FILE__) . "/../LAT/setup_lat.php");?>';
$file_path = "$path/hooks/__global.php";
$res = $lat_class->add_to_file($file_path, $extra_function, $code);
inspect_result($res, $file_path, $lat_class);

$files = [
	'admin/incHeader' => ['header', "true"],
	'admin/incFooter' => ['footer', "true"],
	'header' => ['header', "false"],
	'footer' => ['footer', "false"],
	'home' => ['home', "false"]
];
foreach ($files as $fn => $call) {
	$code = '<?php if (activate_LAT("' . $call[0] . '",$x,' . $call[1] . ')) return; ?>';
	$file_path = $path . "/$fn.php";
	$res = $lat_class->add_to_file($file_path, $extra_function, $code);

	inspect_result($res, $file_path, $lat_class);
};

echo $lat_class->progress_log->show();
?>

<center>
	<a style="margin:20px;" href="index.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-home"></span> Start page</a>
	<a style="margin:20px;" href="../../LAT/jsonedit.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-cog"></span> Edit Enviroment</a>
</center>

<script>
	$j(function() {

		$j("#progress").height($j(window).height() - $j("#progress").offset().top - $j(".btn-success").height() - 100);

		//add resize event
		$j(window).resize(function() {
			$j("#progress").height($j(window).height() - $j("#progress").offset().top - $j(".btn-success").height() - 100);
		});

	});
</script>

<?php include(dirname(__FILE__) . "/footer.php");

function inspect_result($res, $file_path, &$lat_class)
{
	if ($res) {
		$lat_class->progress_log->add("Installed code into '{$file_path}'.", 'text-success spacer');
	} else {
		$error = $lat_class->last_error();

		if ($error == 'Code already exists') {
			$lat_class->progress_log->add("Skipped installing to '{$file_path}', code is already installed.", 'text-warning spacer');
		} else {
			$lat_class->progress_log->add("Failed to install code '{$file_path}': {$error}", 'text-danger spacer');
		}
	}
}
