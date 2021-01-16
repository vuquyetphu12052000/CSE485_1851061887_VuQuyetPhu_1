﻿<?php require('../path.php');
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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Skill Name</th>
                                            <th>Degree</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($skills as $skill) { ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $skill['skill_name'] ?></td>
                                                <td><?php echo $skill['level_skill'] ?></td>


                                                <td><a href="skillview.php?id=<?php echo $skill['id_skill'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="skilledit.php?idskill=<?php echo $skill['id_skill'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $skill['skill_name']; ?>')" href="delete.php?idskill=<?php echo $skill['id_skill'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <a class="btn btn-primary" href="skillcreate.php" style="margin-top:10px">Create Skill</a>
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
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script>
        function Del($name) {
            return confirm("Do you want to delete the: " + $name + "?");
        }
    </script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


    </body>

    </html>
<?php } else {
    header('location:' . BASE_URL . '/login.php');
} ?>