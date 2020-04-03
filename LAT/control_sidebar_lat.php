  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="overflow-y: auto">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified ">
      <li class="nav-item">
        <a class="nav-link active" href="#control-sidebar-home-tab" data-toggle="tab">
        <i class="fas fa-wrench"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#control-sidebar-color-tab" data-toggle="tab">
        <i class="fas fa-palette"></i>
        </a>
      </li>
      <?php if (getLoggedAdmin()) { ?>
      <li class="nav-item">
        <a class="nav-link" href="#control-sidebar-settings-tab" data-toggle="tab">
          <i class="fa fa-cog"></i>
        </a>
      </li>
      <?php } ?>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane fade show active" id="control-sidebar-home-tab">
        
      </div>
      <!-- /Home .tab-pane -->

      <!-- color tab content -->
      <div class="tab-pane fade" id="control-sidebar-color-tab">
      </div>
      <!-- /color .tab-pane -->

      <?php if (getLoggedAdmin()) { ?>
        <!-- Settings tab content -->
        <div class="tab-pane fade" id="control-sidebar-settings-tab">
          <h4 class="control-sidebar-heading">Admin global Settings</h4>
          <div class="col-xs-6 text-center">
            <a href="<?php echo PREPEND_PATH; ?>LAT/config_edit.php" class="btn btn-app" title="Open app anviroment options"><i class="fa fa-cogs"></i>&nbsp;App anviroment</a>
          </div>
        </div>
        <!-- /Settings .tab-pane -->
      <?php } ?>

    </div>
  </aside>
  <!-- /.control-sidebar -->