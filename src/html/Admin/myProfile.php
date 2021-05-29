<?php
    session_start();
    require_once ("./header.php");
    require_once ("../config.php");
    $username = $_SESSION["username"];
    $id = $_SESSION["id"];
    $sql = "SELECT `adminId`, `firstname`, `lastname`, `birthdate`, `address`, `username`, `email` FROM `admin` WHERE `username` = '".$username."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
<head>

    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../../css/account.css">

    <title>Profile</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
            <div id="content" style="color: black;">
                <!-- End of Topbar -->


                <div>
                    <div id="viewInfo" class="container col-md-10 viewInfo" style=" width: 100%;">
                        <div class="row" id="upload1">
                            <div class="col-md-3">
                                <div id="frame" class="text-center border border-dark rounded viewInfo p-3">
                                    <img id="image1" class="img-fluid border border-dark rounded-circle w-100"
                                        src="https://www.trendsetter.com/pub/media/catalog/product/placeholder/default/no_image_placeholder.jpg"
                                        class="avatar img-circle" alt="avatar">
                                    <div class="container">
                                        <br>
                                        <h5><?php echo $username?></h5>
                                    </div>

                                </div>
                            </div>

                            <div id="basicInfo" class="col-md-8 personal-info border border-dark rounded float-center viewInfo p-3 ml-4">
                                <h4>Profile</h4>
                                <p>Your Personal Information</p>

                                <div class="card rounded">
                                    <div class="card-header">
                                        Basic Information
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Full Name:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label style="font-weight:bold;">Birth Date:</label>
                                            </div>
                                            <div class="col-md-8 col-">
                                                <?php echo $row['birthdate'] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label style="font-weight:bold;">Address:</label>
                                            </div>
                                            <div class="col-md-8 col-">
                                                <?php echo $row['address'] ?>
                                            </div>
                                        </div>
                                        <hr />


                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Email:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $row['email'] ?>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">Edit
                                        Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="edit">Edit Profile</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body main-secction rounded">
                                    <div class="row" id="upload">
                                        <div class="col-md-3">
                                            <div id="frame" class="text-center border border-dark rounded main-secction p-3 pl-3 pr-3">
                                                <img id="image"
                                                    class="img-fluid border border-dark rounded-circle w-100"
                                                    src="https://www.trendsetter.com/pub/media/catalog/product/placeholder/default/no_image_placeholder.jpg"
                                                    class="avatar img-circle" alt="avatar">
                                                <p>Upload a different photo...</p>

                                                <input type="file" class="form-control">
                                            </div>
                                        </div>

                                        <div id="info" class="col-md-8 personal-info border border-dark rounded float-center main-secction ml-5">
                                            <center>
                                                <h5 class="mt-4 mb-3">Personal Information</h5>
                                            </center>
                                            <form style="margin-left: 90px;">
                                                <div class="form-row">
                                                    <div class="col-auto">
                                                        <label>First Name</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fa fa-user"
                                                                        style="color: #e32467;"></i></div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Firstname"
                                                                value="<?php echo $row['firstname'] ?>">
                                                        </div>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                    <div class="col-auto">
                                                        <label>Last Name</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fa fa-user"
                                                                        style="color: #e32467;"></i></div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Lastname"
                                                                value="<?php echo $row['lastname'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-auto">
                                                        <label>Birthdate</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-birthday-cake"
                                                                        style="color: #e32467;"></i></div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Birthdate"
                                                                value="<?php echo $row['birthdate'] ?>">
                                                        </div>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                    <div class="col-auto">
                                                        <label>Address</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i
                                                                        class="fa fa-map-marker"
                                                                        style="color: #e32467;"></i></div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Address"
                                                                value="<?php echo $row['address'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-auto">
                                                        <label>Username</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text" style="color:  #e32467;;">
                                                                    @</div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Username"
                                                                value="<?php echo $row['username'] ?>">
                                                        </div>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                    <div class="col-auto">
                                                        <label>Email</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fa fa-envelope"
                                                                        style="color: #e32467;"></i></div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Email"
                                                                value="<?php echo $row['email'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-auto">
                                                        <label>Current Password</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-key" style="color: #e32467;"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="inlineFormInputGroup" placeholder="Password">
                                                        </div>
                                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                    <div class="col-auto">
                                                        <label>New Password</label>
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"> <i class="fa fa-key"
                                                                        style="color: #e32467;"></i></div>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="New Password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="button" id="save" class="btn btn-primary ">Save
                                                    Changes</button>
                                            </div>
                                            <?php } } ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                    </script><br>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

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