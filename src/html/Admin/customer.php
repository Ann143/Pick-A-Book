<?php
require_once ("../config.php");
require_once ("./header.php");

?>

<head>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Customer</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                    <h5 class="h3 mb-0 text-gray-800" style="margin-left: 21px;">Customers</h5>
                </div>

                <div class="container">
                    <table id="example" class="table table-striped"
                        style="width:100%;box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19); text-align: center;">
                        <thead style="background-color: #d40d3b; color: white;">
                            <tr>
                                <th>Customer's Name</th>
                                <th>Birthdate</th>
                                <th>Address</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody style="color: black;">
                        <?php

                            $sql = "SELECT * FROM `users`";
                            $result = $conn -> query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['firstname']." ".$row['lastname'];?></td>
                                <td><?php echo $row['birthdate']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['username']?></td>
                                <td><?php echo $row['email']?></td>
                                <td>
                                    <!-- <i class="fas fa-edit" style="font-size: 20px;; color: rgb(255, 217, 0);"></i>&nbsp;
                                    <i class="fas fa-trash" style="font-size: 20px;; color: rgb(255, 0, 21);"></i> -->
                                    <form action="" method="post">
                                        <input type="hidden" name="userId" value="<?php echo $row['userId']?>">
                                        <button type="submit" name="delete" class="btn btn-outline-danger">
                                           Delete
                                        </button>
                                        </form>

                                </td>
                            </tr>
                            <?php endwhile; 
                        }?>
                        </tbody>
                    </table>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
                <?php

                    if (isset($_POST['delete'])){
                        
                        $userId=$_POST['userId'];
                        $query="delete from users where userId='".$userId."'";

                        if($conn->query($query)===TRUE){
                            ?>

                        <!--fire a successful message using sweet alert -->
                    <script>
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Customer successfully deleted!',
                        button: true,
                        timer: 1800
                    
                    })
                    setTimeout(() => {
                    location.reload()
                    }, 2000);
                    </script>
                    <?php
                            
                        }
                    }
                    ?> 
                    <script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                </script>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white" style="margin-top:220px">
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