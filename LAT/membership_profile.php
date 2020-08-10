<?php
define("PREPEND_PATH", "../");
$rootDir = dirname(__FILE__) . "/..";
include("$rootDir/defaultLang.php");
include("$rootDir/language.php");
include("$rootDir/lib.php");
include("$rootDir/LAT/myLib.php");
include_once("$rootDir/LAT/profile/mpi.php");

$adminConfig = config('adminConfig');
$imageFolder = $rootDir . "/images/";

/* no access for guests */
$mi = getMemberInfo();
if (!$mi['username'] || $mi['group'] == $adminConfig['anonymousGroup']) {
  @header('Location: ../index.php');
  exit;
}
$mpi = new Mpi($mi['username'], $imageFolder);

/* save profile */
if ($_POST['action'] == 'saveProfile') {
  if (!csrf_token(true)) {
    echo $Translation['error:'];
    exit;
  }

  /* process inputs */
  $email = isEmail($_POST['email']);
  $custom1 = makeSafe($_POST['custom1']);
  $custom2 = makeSafe($_POST['custom2']);
  $custom3 = makeSafe($_POST['custom3']);
  $custom4 = makeSafe($_POST['custom4']);

  /* validate email */
  if (!$email) {
    echo "{$Translation['error:']} {$Translation['email invalid']}";
    echo "<script>$$('label[for=\"email\"]')[0].pulsate({ pulses: 10, duration: 4 }); $j('#email').focus();</script>";
    exit;
  }

  /* update profile */
  $updateDT = date($adminConfig['PHPDateTimeFormat']);
  sql("UPDATE `membership_users` set email='$email', custom1='$custom1', custom2='$custom2', custom3='$custom3', custom4='$custom4', comments=CONCAT_WS('\\n', comments, 'member updated his profile on $updateDT from IP address {$mi[IP]}') WHERE memberID='{$mi['username']}'", $eo);

  // hook: member_activity
  if (function_exists('member_activity')) {
    $args = array();
    member_activity($mi, 'profile', $args);
  }

  exit;
}

/* change password */
if ($_POST['action'] == 'changePassword' && $mi['username'] != $adminConfig['adminUsername']) {
  if (!csrf_token(true)) {
    echo $Translation['error:'];
    exit;
  }

  /* process inputs */
  $oldPassword = $_POST['oldPassword'];
  $newPassword = $_POST['newPassword'];

  /* validate password */
  $hash = sqlValue("SELECT `passMD5` FROM `membership_users` WHERE memberID='{$mi['username']}'");
  if (!password_match($oldPassword, $hash)) {
    echo "{$Translation['error:']} {$Translation['Wrong password']}";
?>
    <script>
      $j(function() {
        $j('#old-password').focus();
      })
    </script>
  <?php
    exit;
  }
  if (strlen($newPassword) < 4) {
    echo "{$Translation['error:']} {$Translation['password invalid']}";
  ?>
    <script>
      $j(function() {
        $j('#new-password').focus();
      })
    </script>
<?php

    exit;
  }

  /* update password */
  $updateDT = date($adminConfig['PHPDateTimeFormat']);
  sql("UPDATE `membership_users` set `passMD5`='" . password_hash($newPassword, PASSWORD_DEFAULT) . "', `comments`=CONCAT_WS('\\n', comments, 'member changed his password on $updateDT from IP address {$mi[IP]}') WHERE memberID='{$mi['username']}'", $eo);

  // hook: member_activity
  if (function_exists('member_activity')) {
    $args = array();
    member_activity($mi, 'password', $args);
  }

  exit;
}

/* get profile info */
/* 
		$mi already contains the profile info, as documented at: 
		https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/memberInfo

		custom field names are stored in $adminConfig['custom1'] to $adminConfig['custom4']
	*/
$permissions = array();
$userTables = getTableList();
if (is_array($userTables))  foreach ($userTables as $tn => $tc) {
  $permissions[$tn] = getTablePermissions($tn);
}
/* the profile page view */
include_once("$rootDir/header.php"); ?>

<div id="notify" class="alert alert-success" style="display: none;"></div>
<div id="loader" style="display: none;"><i class="glyphicon glyphicon-refresh"></i> <?php echo $Translation['Loading ...']; ?></div>

<?php echo csrf_token(); ?>


<div class="row" style="background: transparent">
  <div class="col-md-3">

    <!-- Profile Image -->
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-rounded user-image" src="<?php echo PREPEND_PATH; ?>images/<?php echo $mpi->thumb; ?>" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center"><?php echo $mi['custom'][0]; ?></h3>

        <p class="text-muted text-center"><?php echo sprintf($Translation['Hello user'], $mi['username']); ?></p>

        <ul class="list-group list-group-unbordered mb-3">

          <?PHP
          if (is_array($userTables))  foreach ($userTables as $tn => $tc) {
            if (getTablePermissions($tn)) {
              $sql_from = get_sql_from($tn);
              $count_records = ($sql_from ? sqlValue("select count(1) from " . $sql_from) : 0);
          ?>
              <li class="list-group-item">
                <b><?php echo $userTables[$tn][0]; ?></b> <a class="float-right"><?php echo $count_records  ?></a>
              </li>
          <?php
            }
          }
          ?>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#permissions" data-toggle="tab">
              <i class="glyphicon glyphicon-lock"></i>
              <?php echo $Translation['Your access permissions']; ?>
            </a></li>
        </ul>
      </div><!-- /.card-header -->

      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane" id="timeline">
            <!-- The timeline -->
            <div class="timeline timeline-inverse">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-success">
                  <?php echo date("d M. Y"); ?>
                </span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              
              <?php
              $res = sql("
                (SELECT `recID`,`tableName`,`pkValue`,`memberID`,`dateAdded` AS `date`, `groupID`, 'A' as `ABM` FROM `membership_userrecords` WHERE `memberID`='{$mi['username']}' ORDER BY `dateAdded` DESC limit 5)
                UNION all
                (SELECT `recID`,`tableName`,`pkValue`,`memberID`,`dateUpdated` AS `date`, `groupID`, 'U' as `ABM` FROM `membership_userrecords` WHERE `memberID`='{$mi['username']}' ORDER BY `dateUpdated` DESC limit 5)
                ORDER BY `date` DESC", $eo);


              foreach ($res as $i => $item) {
                $abm = $item['ABM'] === 'A' ? 'Added' : 'Updated';
                $color = $item['ABM'] === 'A' ? 'primary' : 'success';
                $icon = $item['ABM'] === 'A' ? 'plus' : 'check';
                $tableName = $userTables[$item['tableName']][0];
                ?>
                  <div>
                    <i class="fas fa-<?php echo $icon; ?> bg-<?php echo $color; ?>"></i>

                    <div class="timeline-item">
                      <span class="time" data-audate="<?php echo @date($adminConfig['PHPDateTimeFormat'], $item['date']); ?>"><i class="far fa-clock"></i> </span>

                      <h3 class="timeline-header"><a href="<?php echo PREPEND_PATH ?><?php echo $item['tableName'] ?>_view.php?SelectedID=<?php echo $item['pkValue'] ?>">Record <?php echo $abm . " to " . $tableName; ?></a> table</h3>

                      <div class="timeline-body">
                      <?php 
                        if(!$pkField=getPKFieldName($item['tableName'])) {
                          return "";
                        }
                        $where_id = " `{$item['tableName']}`.`$pkField`='" . makeSafe($item['pkValue'], false) . "' ";

                        $result=  getDataTable($item['tableName'],$where_id);
                        echo implode(',',$result);
                        //echo getCSVData($item['tableName'], $item['pkValue']); 
                        ?>
                      </div>
                      <div class="timeline-footer">
                        <a href="<?php echo PREPEND_PATH ?><?php echo $item['tableName'] ?>_view.php?SelectedID=<?php echo $item['pkValue'] ?>" class="btn btn-primary btn-sm">Open</a>
                      </div>
                    </div>
                  </div>
                <?php 
              } ?>
              <!-- END timeline item -->
              <div>
                <i class="far fa-clock bg-gray"></i>
              </div>
            </div>
          </div>

          <div class="tab-pane active" id="settings">
            <fieldset id="profile">
              <div class="form-group">
                <label for="email"><?php echo $Translation['email']; ?></label>
                <input type="email" id="email" name="email" value="<?php echo $mi['email']; ?>" class="form-control">
              </div>

              <?php for ($i = 1; $i < 5; $i++) { ?>
                <div class="form-group">
                  <label for="custom<?php echo $i; ?>"><?php echo $adminConfig['custom' . $i]; ?></label>
                  <input type="text" id="custom<?php echo $i; ?>" name="custom<?php echo $i; ?>" value="<?php echo $mi['custom'][$i - 1]; ?>" class="form-control">
                </div>
              <?php } ?>

              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <button id="update-profile" class="btn btn-success btn-block" type="button"><i class="glyphicon glyphicon-ok"></i> <?php echo $Translation['Update profile']; ?></button>
                </div>
              </div>
            </fieldset>
            <br>
            <form action="submit">
              <div class="form-group">
                <label for="email">Select profile image</label>
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input class="custom-file-input" name="mpi" id="mpi" type="file">
                    <label class="custom-file-label" for="mpi" aria-describedby="mpi-update">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <button type="submit" id="mpi-update" class="btn btn-primary btn-block"><b>Upload</b></button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="permissions">
            <p><strong><?php echo $Translation['Legend']; ?></strong></p>
            <div class="row">
              <div class="col-xs-2 col-md-1 text-right"><img src="<?php echo PREPEND_PATH; ?>admin/images/stop_icon.gif"></div>
              <div class="col-xs-10 col-md-5"><?php echo $Translation['Not allowed']; ?></div>
              <div class="col-xs-2 col-md-1 text-right"><img src="<?php echo PREPEND_PATH; ?>admin/images/member_icon.gif"></div>
              <div class="col-xs-10 col-md-5"><?php echo $Translation['Only your own records']; ?></div>
            </div>
            <div class="row">
              <div class="col-xs-2 col-md-1 text-right"><img src="<?php echo PREPEND_PATH; ?>admin/images/members_icon.gif"></div>
              <div class="col-xs-10 col-md-5"><?php echo $Translation['All records owned by your group']; ?></div>
              <div class="col-xs-2 col-md-1 text-right"><img src="<?php echo PREPEND_PATH; ?>admin/images/approve_icon.gif"></div>
              <div class="col-xs-10 col-md-5"><?php echo $Translation['All records']; ?></div>
            </div>

            <p class="vspacer-lg"></p>

            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered" id="permissions">
                <thead>
                  <tr>
                    <th><?php echo $Translation['Table']; ?></th>
                    <th class="text-center"><?php echo $Translation['View']; ?></th>
                    <th class="text-center"><?php echo $Translation['Add New']; ?></th>
                    <th class="text-center"><?php echo $Translation['Edit']; ?></th>
                    <th class="text-center"><?php echo $Translation['Delete']; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($permissions as $tn => $perm) { ?>
                    <tr>
                      <td><img src="<?php echo PREPEND_PATH; ?><?php echo $userTables[$tn][2]; ?>"> <a href="<?php echo $tn; ?>_view.php"><?php echo $userTables[$tn][0]; ?></a></td>
                      <td class="text-center"><img src="<?php echo PREPEND_PATH; ?>admin/images/<?php echo permIcon($perm[2]); ?>" /></td>
                      <td class="text-center"><img src="<?php echo PREPEND_PATH; ?>admin/images/<?php echo ($perm[1] ? 'approve' : 'stop'); ?>_icon.gif" /></td>
                      <td class="text-center"><img src="<?php echo PREPEND_PATH; ?>admin/images/<?php echo permIcon($perm[3]); ?>" /></td>
                      <td class="text-center"><img src="<?php echo PREPEND_PATH; ?>admin/images/<?php echo permIcon($perm[4]); ?>" /></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->

    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div>


<script>
  $j(function() {
    <?php
    /* Is there a notification to display? */
    $notify = '';
    if (isset($_GET['notify'])) $notify = addslashes(strip_tags($_GET['notify']));
    ?>
    <?php if ($notify) { ?> notify('<?php echo $notify; ?>');
    <?php } ?>


    $j("form").submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);
      getMpi(formData);
    });
    $j('#mpi').on('change', function() {
      //get the file name
      var fileName = $j(this).val();
      //replace the "Choose a file" label
      $j(this).next('.custom-file-label').html(fileName);
    })

    $j('#update-profile').on('click', function() {
      post2(
        '<?php echo basename(__FILE__); ?>', {
          action: 'saveProfile',
          email: $j('#email').val(),
          custom1: $j('#custom1').val(),
          custom2: $j('#custom2').val(),
          custom3: $j('#custom3').val(),
          custom4: $j('#custom4').val(),
          csrf_token: $j('#csrf_token').val()
        },
        'notify', 'profile', 'loader',
        '<?php echo basename(__FILE__); ?>?notify=<?php echo urlencode($Translation['Your profile was updated successfully']); ?>'
      );
    });

    <?php if ($mi['username'] != $adminConfig['adminUsername']) { ?>
      $j('update-password').on('click', function() {
        /* make sure passwords match */
        if ($j('#new-password').val() != $j('#confirm-password').val()) {
          $j('#notify').addClass('alert-danger');
          notify('<?php echo "{$Translation['error:']} " . addslashes($Translation['password no match']); ?>');
          $$('label[for="confirm-password"]')[0].pulsate({
            pulses: 10,
            duration: 4
          });
          $j('#confirm-password').focus();
          return false;
        }

        post2(
          '<?php echo basename(__FILE__); ?>', {
            action: 'changePassword',
            oldPassword: $j('#old-password').val(),
            newPassword: $j('#new-password').val(),
            csrf_token: $j('#csrf_token').val()
          },
          'notify', 'password-change-form', 'loader',
          '<?php echo basename(__FILE__); ?>?notify=<?php echo urlencode($Translation['Your password was changed successfully']); ?>'
        );
      });

      /* password strength feedback */
      $j('#new-password').on('keyup', function() {
        var ps = passwordStrength($j('#new-password').val(), '<?php echo addslashes($mi['username']); ?>');

        if (ps == 'strong')
          $j('#password-strength').html('<?php echo $Translation['Password strength: strong']; ?>').css({
            color: 'Green'
          });
        else if (ps == 'good')
          $j('#password-strength').html('<?php echo $Translation['Password strength: good']; ?>').css({
            color: 'Gold'
          });
        else
          $j('#password-strength').html('<?php echo $Translation['Password strength: weak']; ?>').css({
            color: 'Red'
          });
      });

      /* inline feedback of confirm password */
      $j('#confirm-password').on('keyup', function() {
        if ($j('#confirm-password').val() != $j('#new-password').val() || !$j('#confirm-password').val().length) {
          $j('#confirm-status').html('<img align="top" src="Exit.gif"/>');
        } else {
          $j('#confirm-status').html('<img align="top" src="update.gif"/>');
        }
      });
    <?php } ?>

    var dates = $j('.time').each(function() {
      //console.log($j(this).data('audate'));
      var a = moment($j(this).data('audate')).fromNow();
      if (a !== 'Invalid Date') {
        $j(this).append(a);
      }
    });

  });

  function notify(msg) {
    $j('#notify').html(msg).fadeIn();
    window.setTimeout(function() {
      /* */
      $j('#notify').fadeOut();
    }, 15000);
  }
</script>

<?php
/* return icon file name based on given permission value */
function permIcon($perm)
{
  switch ($perm) {
    case 1:
      return 'member_icon.gif';
    case 2:
      return 'members_icon.gif';
    case 3:
      return 'approve_icon.gif';
    default:
      return 'stop_icon.gif';
  }
}
?>

<?php include_once("$rootDir/footer.php"); ?>