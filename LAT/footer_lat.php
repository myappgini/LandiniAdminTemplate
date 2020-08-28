<?php include(dirname(__FILE__)."/config_lat.php"); ?>
<?php if ($ADMINAREA) echo "</div> <!-- /.row div in admin area --><div class='row'></div> "; ?>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /section.content -->
        </div>
        <!-- /.content-wrapper -->
    <?php if (!$_REQUEST['Embedded']) { ?>
        <?php include "control_sidebar_lat.php"; ?>
        <!-- .main-footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-block">
                <?php echo $LAT_globals['footer-right-text']; ?>
            </div>
            <?php echo $LAT_globals['footer-left-text']; ?>
        </footer>
        <!-- /.main-footer -->
    <?php
    } ?>
    <?php if (!defined('APPGINI_SETUP') && is_file(dirname(__FILE__) . '/../hooks/footer-extras.php')) {
        include(dirname(__FILE__) . '/../hooks/footer-extras.php');
    } ?>
    </div>
    <!-- /.wrapper -->
<script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo PREPEND_PATH; ?>LAT/js/control.js"></script>
<?php
if (!$memberInfo['admin'] && $memberInfo['group'] !== 'anonymous') {
?>
    <script src="<?php echo PREPEND_PATH; ?>LAT/js/setcontrols.js"></script>
<?php
}
?>
<script>
    //resuelve el conflicto entre bootstrap y prototypejs
    //http://www.softec.lu/site/DevelopersCorner/BootstrapPrototypeConflict
    //demo page
    //http://jsfiddle.net/dgervalle/hhBc6/

    jQuery.noConflict();
    if (Prototype.BrowserFeatures.ElementExtensions) {
        var disablePrototypeJS = function(method, pluginsToDisable) {
                var handler = function(event) {
                    event.target[method] = undefined;
                    setTimeout(function() {
                        delete event.target[method];
                    }, 0);
                };
                pluginsToDisable.each(function(plugin) {
                    jQuery(window).on(method + '.bs.' + plugin, handler);
                });
            },
            pluginsToDisable = ['collapse', 'dropdown', 'modal', 'tooltip', 'popover', 'tab'];
        disablePrototypeJS('show', pluginsToDisable);
        disablePrototypeJS('hide', pluginsToDisable);
    }
</script>
<script>labelize_table();</script>
</body>
<!-- /boody -->

</html>