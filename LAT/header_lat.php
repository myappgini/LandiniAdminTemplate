<!DOCTYPE html>
<?php if (!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if (!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php include(dirname(__FILE__)."/config_lat.php"); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="<?php echo datalist_db_encoding; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $LAT_globals['app-title-prefix']; ?><?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
	<link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>LAT/logo/logo.png">

	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>LAT/adminlte3/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>LAT/adminlte3/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>LAT/plugins/jsonedit/jsonedit.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>LAT/css/glyphicons.css">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/lightbox/css/lightbox.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/select2/select2.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/datepicker/css/datepicker.css">
	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/bootstrap-datetimepicker/bootstrap-datetimepicker.css">
	<!-- add rtl css if configured-->
	<?php if ($LAT_globals['app-dir-RTL-enable']) { ?>
		<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/rtl.css">
	<?php } ?>

	<link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>LAT/css/LAT_Custom.css">

	<!--[if lt IE 9]>
		<script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<![endif]-->

	<script src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/plugins/popper/popper.min.js"></script>
	<script>
		//Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
		$.widget.bridge('uibutton', $.ui.button);
		var $j = jQuery.noConflict();
	</script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/prototype/prototype.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/plugins/moment/moment.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/dist/js/adminlte.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/jsonedit/jquery.contextMenu.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/jsonedit/jsonedit.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/TweenMax/TweenMax.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/plugins/l-makecounter/l-makecounter.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery.mark.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>resources/select2/select2.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>resources/jscookie/js.cookie.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>resources/datepicker/js/datepicker.packed.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>resources/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>LAT/js/bootstrap.js"></script>
	<script src="<?php echo PREPEND_PATH; ?>common.js.php"></script>

	<?php
	if (isset($x->TableName) && is_file(dirname(__FILE__) . "/../hooks/{$x->TableName}-tv.js")) { ?>
		<script src="<?php echo PREPEND_PATH; ?>hooks/<?php echo $x->TableName; ?>-tv.js"></script>
	<?php } ?>

</head>
<?php
$call = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$inLogin = false;
if (isset($_GET['loginFailed']) || isset($_GET['signIn']) || $call == "membership_passwordReset.php" || $call == "membership_signup.php") {
	$inLogin = true;
?>
	<style>
		.container-fluid .row {
			background-color: transparent;
			border-radius: 10px;
		}
	</style>
<?php
}

$bodyClass = $inLogin || $_REQUEST['Embedded'] ? "skin-blue fixed layout-top-nav" : "hold-transition sidebar-mini layout-fixed";

if (function_exists('handle_maintenance')) echo handle_maintenance(true);
$memberInfo = getMemberInfo();
if (!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/../hooks/header-extras.php')) {
	include(dirname(__FILE__) . '/../hooks/header-extras.php');
}
if (!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/../LAT/header_extras_lat.php')) {
	include(dirname(__FILE__) . '/../LAT/header_extras_lat.php');
}
?>

<body class="<?php echo $bodyClass; ?>">
	<!-- .wrapper -->
	<div class="wrapper"> 
		<?php
		$adminPath = $ADMINAREA ? "admin/" : "";
		if (!$_REQUEST['Embedded']) include($adminPath . 'navBar_lat.php');
		if (!$_REQUEST['Embedded'] && !$inLogin) include($adminPath . 'sideBarMenu_lat.php');
		?>
		<!-- .content-wrapper -->
		<div class="content-wrapper">
			<!-- .content-header-->
			<section class="content-header">
				<?php
				if (class_exists('Notification')) echo Notification::placeholder();
				if (function_exists('showNotifications')) echo showNotifications();
				?>
			</section>
			<!-- /.content-header -->
			<!-- section.content -->
			<section class="content">
				<!-- .container-fluid -->
				<div class="container-fluid">
				<?php if ($ADMINAREA) echo "<!-- .row div in admin area --> <div class='card card-body'>"; ?>
