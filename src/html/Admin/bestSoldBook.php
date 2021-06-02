<?php
require_once ("../config.php");
require_once ("./header.php");
?>

<head>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Best Sold Book</title>


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="h3 mb-0 text-gray-800">Best Sold Books</h5>
                </div>

                <div class="container">
                    <table id="example" class="table table-striped"
                        style="width:100%;box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
                        <thead style="background-color: #b30930;color: white;">
                            <tr>
                                <th>Book Title <span id="sort">↑</span></th>
                                <th>Book Category</th>
                                <th>Seller</th>
                                <th>Price</th>
                                <th>Total Sold</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody style="color: black;">
                        <?php
                        $sql = "SELECT 
                        ?>
                            <tr>
                                <td>The Invitation</td>
                                <td>Romance Novel</td>
                                <td>Vi Keeland</td>
                                <td>Php 300.00</td>
                                <td>5 pc(s)</td>
                                <td>Php 2000.00</td>
                            </tr>
                            <tr>
                                <td>A Promised Land</td>
                                <td>Biography, Autobiography</td>
                                <td>Barack Obama</td>
                                <td>Php 50.00</td>
                                <td>6 6pc(s)</td>
                                <td>Php 2400.00</td>
                            </tr>
                            <tr>
                                <td>Not My Match</td>
                                <td>Contemporary, Funny, New Adult, Romance, Sports</td>
                                <td>Ilsa Madden-Mills</td>
                                <td>Php 100.00</td>
                                <td> pc(s)</td>
                                <td>Php 2400.00</td>
                            </tr>
                            <tr>
                                <td>The Invitation</td>
                                <td>Romance Novel</td>
                                <td>Vi Keeland</td>
                                <td>Php 300.00</td>
                                <td>7pc(s)</td>
                                <td>Php 2500.00</td>
                            </tr>



                        </tbody>

                    </table>
                </div>


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" style="margin-top:200px">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pick-A-Book 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>