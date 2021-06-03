<?php
require_once ("../config.php");
require_once ("./header.php");
?>

<head>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../../css/account.css">
    <link rel="stylesheet" href="../../css/Seller.css">

    <title>Seller</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    .btn {
        background-color: white;
        color: black;
    }

    #frame {
        margin-bottom: 20px;
    }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="h3 mb-0 text-gray-800" style="margin-left: 21px;">Sellers</h5>
                </div>
                <div class="container" style="margin-left:200px;width:70%;">
                    <table id="example" class="table table-striped"
                        style="width:90%;box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);text-align: center;">
                        <thead style="background-color: #d40d3b; color: white;">
                            <tr>
                                <th>Seller's Name</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody style="color: black;">
                            <?php      
                                $query = "SELECT DISTINCT sellername, firstname, lastname FROM sellbooks";
                                $query_run = mysqli_query($conn,$query);

                                while($row = mysqli_fetch_array($query_run)) {
                            ?>

                            <tr>
                                <td>
                                    <?php echo $row['firstname'];?> <?php echo $row['lastname'];?>
                                </td>
                                <td><a href="sellerInfo.php?name=<?php echo $row['sellername'].'&lname='.$row['lastname'].'&fname='.$row['firstname'];?>">
                                <button data-toggle="modal" data-target="#sellerInfo"  class="btn btn-outline-primary">View Info</button></a>
                                    <a href="model/user.php?sellername=<?php echo $row['sellername']."&status=Delete";?>"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                              
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
 
                <!-- Footer -->

                <footer class="sticky-footer bg-white" style="margin-top:80px">
                    <div class="container my-auto ">
                        <div class="copyright text-center my-auto ">
                            <span>Copyright &copy; Pick-A-Book 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade " id="logoutModal " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel "
        aria-hidden="true ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel ">Ready to Leave?</h5>
                    <button class="close " type="button " data-dismiss="modal " aria-label="Close ">
                        <span aria-hidden="true ">×</span>
                    </button>
                </div>
                <div class="modal-body ">Select "Logout " below if you are ready to end your current session.</div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary " type="button " data-dismiss="modal ">Cancel</button>
                    <a class="btn btn-primary " href="login.html ">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js "></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js "></script>



    <!-- End of Footer -->




</body>

</html>