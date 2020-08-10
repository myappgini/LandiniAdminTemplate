<?php
define("PREPEND_PATH", "../");
$lat_dir = dirname(__FILE__);
include("{$lat_dir}/../defaultLang.php");
include("{$lat_dir}/../language.php");
include("{$lat_dir}/../lib.php");

/* grant access to the groups 'Admins' */
$user_data = getMemberInfo();
if(!in_array($user_data['group'], array('Admins'))){
	redirect("LAT/403_error.php");
	echo "Access denied";
	exit;
}

include_once("{$lat_dir}/../header.php");

$user_group = strtolower($user_data["group"]);
?>
<script>
	$j(function() {

		$j('#json_editor').html('');

		json_editor('json_editor', $j('.jsoninput').val());

		// add the jquery editing magic
		apply_editlets();

		$j('.jsoninput').click(function() {
			$j(this).focus();
			$j(this).select();
		});
	});
</script>
<div class="json-edit">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-4">
					<a class="btn btn-app">
						<i class="fas fa-redo" onclick="load_from_card('jsonglobals'); " title="reset to last changues"></i> Reset
					</a>
					<a class="btn btn-app" onclick="save_ws('json_editor'); " title="save changues to server">
							<i class="fas fa-save"></i> Save
					</a>
				</div>
				<div class="col-md-8">
					<div class="callout callout-success">
						<h4>Editing Application varibles and icon group</h4>
						<p>
							.. Delete nodes (right click to delete)<br>
							.. Add nodes (options below a container)
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div>
				<textarea id="jsonglobals" rows="20" cols="30" class="jsoninput" hidden>
							<?php
							echo file_get_contents('config.json');
							?>
				</textarea>
			</div>
			<div >
				<div id="json_editor" data-role="myjson"></div>
			</div>
		</div>

	</div>
</div>
<!-- END visible area//-->
<div style="display:none">
	<div data-type="object"></div>
	<div data-type="array"></div>
</div>
<?php include_once("$lat_dir/../footer.php"); ?>