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
          <a href="blog.php"><i class="fa fa-desktop"></i> Blog</a>
        </li>
        <li>
          <a href="education.php"><i class="fa fa-bar-chart-o"></i> Education</a>
        </li>
        <li>
          <a href="experience.php" class="active-menu"><i class="fa fa-qrcode"></i> Experience</a>
        </li>

        <li>
          <a href="portfolio.php"><i class="fa fa-table"></i> Portfolios </a>
        </li>
        <li>
          <a href="skill.php"><i class="fa fa-edit"></i> Skills </a>
        </li>


        <li>
          <a href="<?php  echo BASE_URL . '/index.php'?>"><i class="fa fa-sitemap"></i> ← Back to Online CV</a>

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
        Experiences Page
      </h1>


    </div>

    <div id="page-inner">

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Experiences
            </div>

            <div class="panel-body">

              <p>ID: <span><?php echo $experience['id_experiences']; ?></span> </p>
              <p>Job Name: <span><?php echo $experience['work'];  ?></span> </p>
              <p>Time: <span><?php echo $experience['time'];  ?></span></p>
              <p>Description: <span><?php echo $experience['description'];  ?></span></p>
              <a class="btn btn-primary" href="experience.php">Cancel</a>
            </div>
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