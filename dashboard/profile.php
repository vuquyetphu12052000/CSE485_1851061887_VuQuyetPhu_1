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
                    <a href="experience.php"><i class="fa fa-qrcode"></i> Experience</a>
                </li>

                <li>
                    <a href="portfolio.php"><i class="fa fa-table"></i> Portfolios</a>
                </li>
                <li>
                    <a href="skill.php"><i class="fa fa-edit"></i> Skills </a>
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
                Profile Page
            </h1>


        </div>
        <div id="page-inner">


            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>

                        <div class="panel-body">
                            <section class="home section" id="home">
                                <div class="container">
                                    <div class="intro">
                                        <img src=" <?php echo 'data:image/png;base64,',($row['image']); ?>" alt="profile" class="shadow-dark">
                                        <!-- <form action="" method="POST">
                                            <div class="form-group" style="margin-top:-25px ; margin-left:100px">
                                                <label for="upload-backgroud">
                                                    <i class="change-backgroud fa fa-camera"></i>
                                                    <input class="field-backgroud" name="change-backgroud" type="file" id="upload-backgroud" style="display:none">
                                                </label>
                                            </div>
                                        </form> -->

                                        <!-- <label for="upload-backgroud">
                                            <i class="change-backgroud fa fa-camera"></i>
                                            <input class="field-backgroud" name="change-backgroud" type="file" id="upload-backgroud" style="display:none">
                                        </label> -->
                                        <h1><?php echo $row['fullname']; ?></h1>

                                        <p>I'm a <?php echo $row['short_description']; ?></p>

                                    </div>
                            </section>
                           
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Fullname</label>
                                    <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Work</label>
                                    <input type="text" name="description_short" class="form-control" value="<?php echo $row['short_description']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Birhday</label>
                                    <input type="date" name="birthday" class="form-control" value="<?php echo $row['birthday']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?> " required>
                                </div>



                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="description" class="form-control" value="<?php echo $row['description']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="sbm1" class="btn btn-success" >Edit</button>
                                </div>
                            </form>
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

    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>



    </body>

    </html>
<?php } else {
    header('location:' . BASE_URL . '/login.php');
} ?>