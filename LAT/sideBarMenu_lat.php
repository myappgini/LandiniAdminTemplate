<?php
if (!isset($Translation)) {
    $currDir = dirname(__FILE__);
	include("{$currDir}/../defaultLang.php");
	include("{$currDir}/../language.php");
}
?>
<!-- aside.main-sidebar -->
<aside class="main-sidebar elevation-4 sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="<?php echo PREPEND_PATH; ?>index.php" class="brand-link">
        <img src="<?php echo PREPEND_PATH; ?>LAT/logo/<?php echo $LAT_globals['app-brand-icon']; ?>" alt="app-brand-icon" class="brand-image img-rounded elevation-3" style="opacity: .8">
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
                        <p><?php echo $Translation["sign out"]; ?></p>
                    </a>
                </li>
                <div class="pb-3 mb-3" style="border-bottom: 1px solid #4f5962;"></div>

                <?php

                $homeLinks = [];
                $len = 17;
                @include("{$currDir}/hooks/links-home.php");
                $arrTables = get_tables_info();
                $groups = get_table_groups();
                foreach ($groups as $lte_group => $lte_tables) {
                    if (($lte_group !== 'hiddens' || $memberInfo['admin'])) { // new fucntionality if table group named hiddens dont show in other users
                        if (count($lte_tables)) {
                            if (($lte_group !== 'None')) { ?>
                                <li class="nav-item has-treeview <?php echo (in_array($x->TableName, $lte_tables)  ? 'menu-open' : ''); ?>">
                                    <a href="#" class="nav-link <?php echo (in_array($x->TableName, $lte_tables)  ? 'active' : ''); ?>">
                                        <i class="nav-icon <?php echo $LTE_group_ico[$lte_group] ? $LTE_group_ico[$lte_group] : $ico; ?>"></i>
                                        <p>
                                            <?php echo $lte_group; ?>
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                    <?php
                                    }
                                    foreach ($lte_tables as $lte_table) {

                                        $tc = $arrTables[$lte_table];
                                        ?>
                                            <li class="nav-item">
                                                <a href="<?php echo PREPEND_PATH . $lte_table; ?>_view.php" class="nav-link  <?php echo ($lte_table === $x->TableName ? 'active' : ''); ?>">
                                                    <?php echo ($tc['tableIcon'] ? '<img src="' . PREPEND_PATH . $tc['tableIcon'] . '">' : ''); ?>
                                                    <p>
                                                        <?php
                                                        $dot = (strlen($tc['Caption']) > $len) ? "..." : "";
                                                        echo substr($tc['Caption'], 0, $len) . $dot;
                                                        echo counter($lta_table, $tc);
                                                        ?>
                                                    </p>
                                                </a>
                                            </li>
                                            <?php
                                    }
                                    foreach ($homeLinks as $link) {
                                        if (!isset($link['url']) || !isset($link['title'])) continue;
                                        if ($lte_group != $link['table_group'] && $lte_group != '*') continue;
                                        if ($memberInfo['admin'] || @in_array($memberInfo['group'], $link['groups']) || @in_array('*', $link['groups'])) {
                                            $title = $link['subGroup'] ? $link['subGroup'] . " - " . $link['title'] : $link['title'];
                                            $dot = (strlen($title) > $len + 3) ? "..." : "";
                                        ?>
                                            <li class="nav-item">
                                                <a href="<?php echo PREPEND_PATH . $link['url']; ?>" title="<?php echo $title; ?>" class="nav-link">
                                                    <?php echo ($link['icon'] ? '<img src="' . PREPEND_PATH . $link['icon'] . '">' : ''); ?>
                                                    <p>
                                                        <?php echo substr($title, 0, $len + 3) . $dot; ?>
                                                    </p>
                                                </a>
                                            </li>
                                        <?php
                                        }
                                    }
                                    if (($lte_group !== 'None')) {
                                        ?>
                                    </ul>
                                </li>
                            <?php
                                    }
                                } else {
                            ?>
                            <li class="nav-item active">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-link"></i>
                                    <span><?php echo $lte_group; ?></span>
                                </a>
                            </li>
                        <?php
                                }
                            }
                }
                foreach ($homeLinks as $link) {
                    if (!isset($link['url']) || !isset($link['title'])) continue;
                    if ($link['table_group'] != '*' && $link['table_group'] != '') continue;
                    if ($memberInfo['admin'] || @in_array($memberInfo['group'], $link['groups']) || @in_array('*', $link['groups'])) {
                        ?>
                        <li class="nav-item">
                            <a href="<?php echo PREPEND_PATH . $link['url']; ?>" class="nav-link">
                                <?php echo ($link['icon'] ? '<img src="' . PREPEND_PATH . $link['icon'] . '">' : ''); ?>
                                <p>
                                    <?php echo $link['subGroup'] ? $link['subGroup'] . " - " . $link['title'] : $link['title']; ?>
                                </p>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
            <!-- /.sidebar-menu -->
        </nav>
        <!-- /nav Menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- /aside.main-sidebar -->
<?php
function counter($table, $tc)
{
    $count_badge = '';
    if ($tc['homepageShowCount']) {
        $sql_from = get_sql_from($table);
        $count_records = ($sql_from ? sqlValue("select count(1) from " . $sql_from) : 0);
        $count_badge = '<spam class="right badge badge-info">' . number_format($count_records) . '</spam>';
    }
    return $count_badge;
}
