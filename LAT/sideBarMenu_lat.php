<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo PREPEND_PATH; ?>index.php" class="brand-link">
        <img src="<?php echo PREPEND_PATH; ?>LAT/logo/L2.png" alt="lat" class="brand-image img-rounded elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $LAT_globals['app-brand-text']; ?></span>
    </a>

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PREPEND_PATH; ?>images/<?php echo $mpi->thumb; ?>" class="img-rounded elevation-2 user-image" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo PREPEND_PATH; ?>LAT/membership_profile.php" class="d-block"><?php echo getLoggedMemberID(); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
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
                /* accessible tables */

                $arrTables = get_tables_info();
                $homeLinks = [];
                @include("{$currDir}/hooks/links-home.php");
                if (is_array($arrTables) && count($arrTables)) {
                    /* how many table groups do we have? */
                    $groups = get_table_groups();
                    $multiple_groups = (count($groups) > 1 ? true : false);

                    /* construct $tg: table list grouped by table group */
                    $tg = array();
                    if (count($groups)) {
                        foreach ($groups as $grp => $tables) {
                            foreach ($tables as $tn) {
                                $tg[$tn] = $grp;
                                if ($tn === $x->TableName) {
                                    $current_group = $grp;
                                }
                            }
                        }
                    }
                    $i = 0;
                    $len = 17;
                    foreach ($groups as $lte_group => $lte_tables) {
                        if (($lte_group !== 'hiddens' || $memberInfo['admin'])) { // new fucntionality if table group named hiddens dont show in other users
                            if (count($lte_tables)) {
                                if (($lte_group !== 'None')) {
                                    ?>
                                    <li class="nav-item has-treeview <?php echo ($lte_group === $current_group ? 'menu-open' : ''); ?>">
                                        <a href="#" class="nav-link">
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
                                            $count_badge = '';
                                            if ($tc['homepageShowCount']) {
                                                $sql_from = get_sql_from($lte_table);
                                                $count_records = ($sql_from ? sqlValue("select count(1) from " . $sql_from) : 0);
                                                $count_badge = '<spam class="right badge badge-info">' . number_format($count_records) . '</spam>';
                                            }
                                            /* hide current table in homepage? */
                                            $tChkHL = array_search($lte_table, array('ordersDetails', 'creditDocument', '_resumeOrders', 'electronicInvoice', 'modalitaPagamento', 'codiceDestinatario', 'regimeFiscale', 'tipoCassa'));
                                            if ($tChkHL === false || $tChkHL === null) { /* if table is not set as hidden in homepage */ ?>
                                                <li class="nav-item">
                                                    <a href="<?php echo PREPEND_PATH . $lte_table; ?>_view.php" class="nav-link  <?php echo ($lte_table === $x->TableName ? 'active' : ''); ?>">
                                                        <?php echo ($tc['tableIcon'] ? '<img src="' . PREPEND_PATH . $tc['tableIcon'] . '">' : ''); ?>
                                                        <p>
                                                            <?php $dot = (strlen($tc['Caption']) > $len) ? "..." : "";
                                                            echo substr($tc['Caption'], 0, $len) . $dot;
                                                            echo $count_badge;
                                                            ?>
                                                        </p>
                                                    </a>
                                                </li>
                                            <?php
                                            }
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
                                        $i++;
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
                        } else {
                    ?><script>
                        window.location = 'index.php?signIn=1';
                    </script><?php
                            }
                                ?>

            </ul>
            <!-- /.sidebar-menu -->
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>