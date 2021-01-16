<?php require('../path.php');
require('../db/db.php');
?>
<?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) { ?>
  <?php include(ROOT_PATH . '/dashboard/header/header.php'); ?>
  <!--/. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">

        <li>
          <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
          <a href="blog.php"><i class="fa fa-desktop"></i> Blogs</a>
        </li>
        <li>
          <a href="education.php"><i class="fa fa-bar-chart-o"></i> Educations</a>
        </li>
        <li>
          <a href="experience.php"><i class="fa fa-qrcode"></i> Experiences</a>
        </li>

        <li>
          <a href="portfolio.php"><i class="fa fa-table"></i> Portfolios</a>
        </li>
        <li>
          <a href="skill.php" class="active-menu"><i class="fa fa-edit"></i> Skills </a>
        </li>


        <li>
          <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown</a>
        </li>
        <li>
          <a href="empty.php"><i class="fa fa-fw fa-file"></i> Empty Page</a>
        </li>
      </ul>

    </div>

  </nav>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div class="header">
      <h1 class="page-header">
        Skills Page
      </h1>

    </div>

    <div id="page-inner">
      <div class="row">

        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-heading">
              Skills
            </div>
            <div class="panel-body">
              <p>ID: <span><?php echo $skill['id_skill']; ?></span> </p>
              <p>Skill Name: <span><?php echo $skill['skill_name'];  ?></span> </p>
              <p>Degree: <span><?php echo $skill['level_skill'];  ?></span></span></p>
              <a class="btn btn-primary" href="skill.php">Cancel</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <!-- JS Scripts-->
  <!-- jQuery Js -->
  <!-- jQuery Js -->
  <!-- jQuery Js -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- Bootstrap Js -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Metis Menu Js -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- <script src="assets/js/jquery.metisMenu.js"></script> -->
  <!-- Morris Chart Js -->
  <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
  <script src="assets/js/morris/morris.js"></script>
  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>


  </body>

  </html>
<?php } else {
  header('location:' . BASE_URL . '/login.php');
} ?>