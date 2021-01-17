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
                    <a href="education.php" class="active-menu"><i class="fa fa-bar-chart-o"></i> Education</a>
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
                    <a href="<?php echo BASE_URL . '/index.php' ?>"><i class="fa fa-sitemap"></i> ← Back to Online CV</a>
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
                Education Page
            </h1>


        </div>
        <div id="page-inner">

            <div class="row">


                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Education
                        </div>

                        <div class="panel-body">
                            <div class="form-inline">
                                <label for="search" class="font-weight-blod lead text-dark">Search Record</label>
                                <input type="text" name="search" id="search1_text" class="form-control form-control-lg rounded-0 border-primary" placeholder="Search...">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables1-example">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>School Name</th>
                                            <th>Time</th>
                                            <th>Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($educations1 as $education) { ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $education['school_name'] ?></td>
                                                <td><?php echo $education['time'] ?></td>
                                                <td><?php echo $education['description'] ?></td>
                                                <td><a href="educationview.php?id=<?php echo $education['id_education']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="educationedit.php?ideducation=<?php echo $education['id_education']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $education['school_name']; ?>')" href="delete.php?ideducation=<?php echo $education['id_education']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation" style="text-align: center;">
                                <ul class="pagination">
                                    <li>
                                        <a href="education.php?pageeducation=<?= $Previous1 ?>" aria-label="Previous">
                                            <span aria-label="true">&laquo; Previous</span>
                                        </a>
                                    </li>
                                    <?php for ($i = 1; $i <= $pages1; $i++) : ?>
                                        <li><a href="education.php?pageeducation=<?= $i ?>"><?= $i; ?></a></li>
                                    <?php endfor; ?>
                                    <li>
                                        <a href="education.php?pageeducation=<?= $Next1 ?>" aria-label="Next">
                                            <span aria-label="true">Next &raquo;</span>
                                        </a>
                                    </li>
                                </ul>

                            </nav>
                            <a class="btn btn-primary" href="educationcreate.php" style="margin-top:10px">Create Education</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->

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
    <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search1_text").keyup(function() {
                var search = $(this).val();
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: {
                        query1: search
                    },
                    success: function(response) {
                        $("#dataTables1-example").html(response);
                    }

                });
            });
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