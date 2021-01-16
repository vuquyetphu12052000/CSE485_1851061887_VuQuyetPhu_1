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
              <?php if (count($errors) > 0) { ?>
                <div class="msg error">
                  <?php foreach ($errors as $error) { ?>
                    <li><?php echo $error ?></li>
                  <?php } ?>
                </div>
              <?php } ?>
              <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="">Skill Name</label>
                  <input type="text" name="skillname" class="form-control" value="<?php echo $skill['skill_name'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="">Degree</label>
                  <input type="text" name="degree" class="form-control" value="<?php echo $skill['level_skill'] ?>" required>
                </div>

                <div class="form-group">
                  <button type="submit" name="skilledit" class="btn btn-success">Create</button>
                  <a class="btn btn-success" href="skill.php">Cancel</a>
                </div>
              </form>

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


  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>

  <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
  <script src="assets/js/dataTables/jquery.dataTables.js"></script>
  <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTables-example').dataTable();
    });
  </script>

  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>


  </body>

  </html>
<?php } else {
  header('location:' . BASE_URL . '/login.php');
} ?>