<?php
$latDir = dirname(__FILE__);
$imageFolder = $latDir . "/../images/";
include_once("{$latDir}/profile/mpi.php");

$mpi = new Mpi($memberInfo['username'], $imageFolder);
$usr_img = PREPEND_PATH . "images/" . $mpi->thumb;
$searchString = new Request('SearchString');
if (!isset($Translation)) {
  $currDir = dirname(__FILE__);
  include("{$currDir}/../defaultLang.php");
  include("{$currDir}/../language.php");
}
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-info" style="background: #821800;">
  <!-- Navbar left Menu -->
  <ul class="navbar-nav">
    <?php if(!$inLogin) {?>
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Sidebar toggle button-->
    <?php }?>
    <span class="navbar-text d-none d-lg-inline-block"><?php echo $LAT_globals['navbar-text']; ?></span>

  </ul>
  <!-- /Navbar left Menu -->
  <?php if(!$inLogin) {?>
  <form action="#" class="form-inline ml-3">
    <div class="input-group input-group-sm" id="quick-search-lat">
      <input type="text" id="SearchString" name="SearchString" value="<?php echo $searchString->raw; ?>" class="form-control form-control-navbar" placeholder="<?php echo $Translation["quick search"]; ?>">
      <span class="input-group-btn input-group-append">
        <button name="Search_x" value="1" id="Search" type="submit" onclick="document.myform.writeAttribute('novalidate', 'novalidate'); document.myform.NoDV.value=1; return true;" class="btn btn-navbar" title="Quick Search"><i class="glyphicon glyphicon-search"></i></button>
        <button name="ClearQuickSearch" value="1" id="ClearQuickSearch" type="submit" onclick="$j('#SearchString').val(''); document.myform.writeAttribute('novalidate', 'novalidate'); document.myform.NoDV.value=1; return true;" class="btn btn-navbar" title="Show All"><i class="glyphicon glyphicon-remove-circle"></i></button>
      </span>
    </div>
  </form>
  <?php }?>
  <!-- Navbar right Menu -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-shopping-cart"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?php echo PREPEND_PATH; ?>LAT/adminlte3/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <?php
    if (getLoggedAdmin()) { ?>
      <li class="status nav-item">
        <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="nav-link" title="<?php echo html_attr($Translation['admin area']); ?>"><i class="fas fa-cogs"></i><span class="d-none d-lg-inline-block">&nbsp;<?php echo $Translation['admin area']; ?></span></a>
      </li>
    <?php }
    if (!$inLogin) {
    ?>
      <!-- Control Sidebar Toggle Button -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
      </li>
    <?php } ?>
  </ul>
  <!-- /Navbar right Menu -->
</nav>
<!-- /Navbar -->