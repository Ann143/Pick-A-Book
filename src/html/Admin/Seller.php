<?php
session_start();
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
                                $query = "SELECT DISTINCT sellername FROM sellbooks";
                                $query_run = mysqli_query($conn,$query);
 
                                while($row = mysqli_fetch_array($query_run)) {
                            ?>

                            <tr>
                                <td data-toggle="modal" data-target="#exampleModal1" class="sellername"> <?php echo $row['sellername']?>
                                </td>
                                <td>
                                    
                                    <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>


                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="edit">Seller's Information</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body main-secction rounded">
                                <div class="row" id="upload1">
                                    <div class="col-md-4 a">
                                        <div id="frame" class="text-center border border-dark rounded "
                                            style="margin-top: 20px;">
                                            <img id=" image1 " class="border border-dark rounded-circle "
                                                src="../../img/FB_IMG_16157132375310788.jpg "
                                                style=" height:250px; width:200px;margin-top:20px;"
                                                class=" avatar img-circle " alt="avatar ">
                                            <div class="container ">
                                                <h5>Mery-an Telez</h5>
                                                <p>Joined Pick-A-Book on</p>
                                                <p>April 1(7 days ago)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="basicInfo "
                                        class="col-md-7 personal-info border border-dark rounded float-center viewInfo ">

                                        <p>Your Personal Information</p>
                                        <div class="card rounded ">
                                            <div class="card-header ">
                                                Basic Information
                                            </div>
                                            <div class="card-body ">
                                                <div class="row ">
                                                    <div class="col-sm-3 col-md-3 col-5 ">
                                                        <label style="font-weight:bold; ">Full Name</label>
                                                    </div>
                                                    <div class="col-md-8 col-6 ">
                                                        Mery-an Telez
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row ">
                                                    <div class="col-md-3 ">
                                                        <label style="font-weight:bold; ">Birth Date</label>
                                                    </div>
                                                    <div class="col-md-8 col- ">
                                                        March 22, 1994
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row ">
                                                    <div class="col-md-3 ">
                                                        <label style="font-weight:bold; ">Address</label>
                                                    </div>
                                                    <div class="col-md-8 col- ">
                                                        Nasipit Talamban, Cebu City
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row ">
                                                    <div class="col-sm-3 col-md-3 col-5 ">
                                                        <label style="font-weight:bold; ">Email</label>
                                                    </div>
                                                    <div class="col-md-8 col-6 ">
                                                        ebaritabryan@gmail.com
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="post " style="margin-top:30px;">
                                    <div class="div-table ">
                                        <div class="tr ">
                                            <div class="tc ">Book Author</div>
                                            <div class="tc ">Book Category</div>
                                            <div class="tc ">Total Book Sold</div>
                                            <div class="tc ">Total Amount</div>
                                        </div>
                                        <div class="tr ">
                                            <div class="tc "> Liza Jackson</div>
                                            <div class="tc "> Suspense <br> Thriller</div>
                                            <div class="tc "> 65pcs</div>
                                            <div class="tc "> 9750</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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