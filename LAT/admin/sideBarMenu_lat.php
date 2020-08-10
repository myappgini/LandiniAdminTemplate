<?php
$values = $_GET;
if (!isset($values['gr'])) $values['gr'] = "";
if (!isset($values['it'])) $values['it'] = "";

?>
<!-- aside.main-sidebar -->
<aside class="main-sidebar elevation-4 sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="<?php echo PREPEND_PATH; ?>index.php" class="brand-link">
        <img src="<?php echo PREPEND_PATH; ?>LAT/logo/L3.png" alt="lat" class="brand-image img-rounded elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $LAT_globals['app-brand-text']; ?></span>
    </a>

    <!-- .sidebar user panel (optional) -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PREPEND_PATH; ?>images/<?php echo $mpi->thumb; ?>" class="img-rounded elevation-2 user-image" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo PREPEND_PATH; ?>LAT/membership_profile.php" class="d-block"><?php echo getLoggedMemberID(); ?></a>
            </div>
        </div>
        <!-- nav Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo PREPEND_PATH; ?>index.php?signOut=1" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt text-info"></i>
                        <p><?php echo trimMenu($Translation["sign out"]); ?></p>
                    </a>
                </li>
                <div class="pb-3 mb-3" style="border-bottom: 1px solid #4f5962;"></div>
                <li class="nav-item has-treeview <?php echo $values['gr'] == 'groups' ? "menu-open" : ""; ?>">
                    <a href="#" class="nav-link <?php echo $values['gr'] == 'groups' ? "active" : ""; ?>">
                        <i class="glyphicon glyphicon-globe"></i>
                        <p><?php echo trimMenu($Translation['groups']); ?><i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'vg' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageViewGroups.php?gr=groups&it=vg">
                                <i class="glyphicon nav-icon  glyphicon-eye-open"></i>
                                <p><?php echo trimMenu($Translation['view groups']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'ag' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageEditGroup.php?gr=groups&it=ag">
                                <i class="glyphicon nav-icon  glyphicon-plus"></i>
                                <p><?php echo   trimMenu($Translation['add group']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'epa' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageEditGroup.php?gr=groups&it=epa&groupID=<?php echo sqlValue("select groupID from membership_groups where name='" . makeSafe($adminConfig['anonymousGroup']) . "'"); ?>">
                                <i class="glyphicon nav-icon  glyphicon-user"></i>
                                <p><?php echo  trimMenu($Translation['edit anonymous permissions']); ?></p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?php echo $values['gr'] == 'members' ? "menu-open" : ""; ?>">
                    <a href="#" class="nav-link  <?php echo $values['gr'] == 'members' ? "active" : ""; ?>">
                        <i class="glyphicon glyphicon-user"></i>
                        <p><?php echo trimMenu($Translation['members']); ?><i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'vm' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageViewMembers.php?gr=members&it=vm">
                                <i class="glyphicon nav-icon  glyphicon-eye-open"></i>
                                <p><?php echo trimMenu($Translation['view members']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'am' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageEditMember.php?gr=members&it=am">
                                <i class="glyphicon nav-icon  glyphicon-plus"></i>
                                <p><?php echo trimMenu($Translation['add member']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'vmr' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageViewRecords.php?gr=members&it=vmr">
                                <i class="glyphicon nav-icon  glyphicon-th"></i>
                                <p><?php echo trimMenu($Translation["view members' records"]); ?></p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview <?php echo $values['gr'] == 'ut' ? "menu-open" : ""; ?>">
                    <a href="#" class="nav-link <?php echo $values['gr'] == 'ut' ? "active" : ""; ?>">
                        <i class="glyphicon glyphicon-cog"></i>
                        <p><?php echo trimMenu($Translation['utilities']); ?><i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'as' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageSettings.php?gr=ut&it=as">
                                <i class="glyphicon nav-icon  glyphicon-cog"></i>
                                <p><?php echo trimMenu($Translation['admin settings']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'rt' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageRebuildThumbnails.php?gr=ut&it=rt">
                                <i class="glyphicon nav-icon  glyphicon-picture"></i>
                                <p><?php echo  trimMenu($Translation['rebuild thumbnails']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'rf' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageRebuildFields.php?gr=ut&it=rf">
                                <i class="glyphicon nav-icon  glyphicon-refresh"></i>
                                <p><?php echo  trimMenu($Translation['rebuild fields']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'ucsv' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageUploadCSV.php?gr=ut&it=ucsv">
                                <i class="glyphicon nav-icon  glyphicon-upload"></i>
                                <p><?php echo trimMenu($Translation['import CSV']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'to' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageTransferOwnership.php?gr=ut&it=to">
                                <i class="glyphicon nav-icon  glyphicon-random"></i>
                                <p><?php echo trimMenu($Translation['batch transfer']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'pm' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageMail.php?sendToAll=1&gr=ut&it=pm">
                                <i class="glyphicon nav-icon  glyphicon-envelope"></i>
                                <p><?php echo trimMenu($Translation['mail all users']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $values['it'] == 'br' ? "active" : ""; ?>" href="<?php echo PREPEND_PATH; ?>admin/pageBackupRestore.php?gr=ut&it=br">
                                <i class="glyphicon nav-icon  glyphicon-tasks"></i>
                                <p><?php echo trimMenu($Translation['database backups']); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://forums.appgini.com" target="_blank">
                                <i class="glyphicon nav-icon  glyphicon-new-window"></i>
                                <p><?php echo trimMenu($Translation['AppGini forum']); ?></p>
                            </a>
                        </li>
                    </ul>
                </li>

                </li>
                <?php $plugins = get_plugins(); ?> <?php if (count($plugins)) { ?> <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="glyphicon glyphicon-plus"></i>
                            <p><?php echo trimMenu($Translation["plugins"]); ?><i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php foreach ($plugins as $plugin) { ?>
                                <?php
                                                            $plugin_icon = '';
                                                            if ($plugin['glyphicon']) $plugin_icon = "<i class=\"glyphicon glyphicon-{$plugin['glyphicon']}\"></i> ";
                                                            if ($plugin['icon']) $plugin_icon = "<img src=\"{$plugin['admin_path']}/{$plugin['icon']}\"> ";
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="<?php echo $plugin['admin_path']; ?>"><?php echo $plugin_icon . $plugin['title']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!--/nav -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- /aside.main-sidebar -->
<?php
function trimMenu($item, $len = 17)
{
    $dot = (strlen($item) > $len) ? "..." : "";
    return substr($item, 0, $len) . $dot;
}
