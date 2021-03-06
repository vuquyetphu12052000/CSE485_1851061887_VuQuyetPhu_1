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
                    <a href="blog.php"><i class="fa fa-desktop"></i> Blog</a>
                </li>
                <li>
                    <a href="education.php"><i class="fa fa-bar-chart-o"></i> Educations</a>
                </li>
                <li>
                    <a href="experience.php"><i class="fa fa-qrcode"></i> Experience</a>
                </li>

                <li>
                    <a href="portfolio.php" class="active-menu"><i class="fa fa-table"></i> Portfolios</a>
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
                Portfolios Page
            </h1>


        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Portfolio
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="form-inline">
                                    <label for="search" class="font-weight-blod lead text-dark">Search Record</label>
                                    <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary" placeholder="Search...">
                                </div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Portfolio Name</th>
                                            <th>Image</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($portfolios1 as $portfolio) { ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $portfolio['portfolio_name'] ?></td>
                                                <td>
                                                    <img style="width: 100px; height: 50px;" src="<?php echo 'data:image/png;base64,', ($portfolio['image']); ?>" alt="">
                                                </td>

                                                <td><a href="portfolioview.php?id=<?php echo $portfolio['id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="portfolioedit.php?idportfolio=<?php echo $portfolio['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $portfolio['portfolio_name']; ?>')" href="delete.php?idportfolio=<?php echo $portfolio['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation" style="text-align: center;">
                                <ul class="pagination">
                                    <li>
                                        <a href="portfolio.php?pagep=<?= $Previousp ?>" aria-label="Previous">
                                            <span aria-label="true">&laquo; Previous</span>
                                        </a>
                                    </li>
                                    <?php for ($i = 1; $i <= $pagesp; $i++) : ?>
                                        <li><a href="portfolio.php?pagep=<?= $i ?>"><?= $i; ?></a></li>
                                    <?php endfor; ?>
                                    <li>
                                        <a href="portfolio.php?pagep=<?= $Nextp ?>" aria-label="Next">
                                            <span aria-label="true">Next &raquo;</span>
                                        </a>
                                    </li>
                                </ul>

                            </nav>
                            <a class="btn btn-primary" href="portfoliocreate.php" style="margin-top:10px">Create Portfolio</a>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
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
            $("#search_text").keyup(function() {
                var search = $(this).val();
                $.ajax({
                    url: 'portfolioaction.php',
                    method: 'post',
                    data: {
                        query: search
                    },
                    success: function(response) {
                        $("#dataTables-example").html(response);
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