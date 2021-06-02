<?php
require_once ("../config.php");
require_once ("./header.php");
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

                <div id="viewInfo" class="container col-md-10 viewInfo" style=" width: 100%;">
                    <div class="row" id="upload1">
                        <div class="col-md-4">
                            <div id="frame" class="text-center border border-dark rounded viewInfo p-3">
                                <img id="image1" class="img-fluid border border-dark rounded-circle w-100"
                                    src="../adminPic/<?php echo $row['adminPic']; ?>" class="avatar img-circle"
                                    alt="avatar">
                                <div class="container">
                                    <br>
                                    <h5><?php echo $username?></h5>
                                </div>
                            </div>
                        </div>

                        <div id="basicInfo"
                            class="col-md-7 personal-info border border-dark rounded float-center viewInfo p-3 ml-4">
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
                                <button type="button" class="btn btn-outline-primary" style="margin-right: 26px;"
                                    data-toggle="modal" data-target="#addProduct">Edit
                                    Profile</button>
                                <!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                    data-target="#exampleModal">Edit Profile</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
                    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
                    crossorigin="anonymous"></script>
                <?php
                    if(isset($_POST['publish'])){
                        $adminId = $row['adminId'];
                        $fName = $_POST['fname'];
                        $lName =$_POST['lname'];
                        $birthDate =$_POST['birthdate'];
                        $address =$_POST['address'];
                        $username =$_POST['username'];
                        $email =$_POST['email'];
                        $newPass =$_POST['newPass'];
                        $adminPic=$_FILES['adminPic']["name"];   

                        $uploads_dir = '../adminPic/';
                        if(empty($_FILES['adminPic']["name"])) {
                            $query = "UPDATE `admin` SET `firstname`='$fName',`lastname`='$lName',`birthdate`='$birthDate',`address`='$address',`email`='$email',`username`='$username',`password`='$newPass' WHERE `adminId`= $adminId";
                            $query_run = mysqli_query($conn,$query);?>
                <script>
                swal("Good job!", "You Updated your Profile Successfully!", "success").then(() => {
                    location.href = 'myProfile.php'
                })
                </script>
                <?php } else {
                        $query1 = "DELETE FROM `admin` WHERE `adminId` = $adminId";
                        $query="INSERT INTO `admin`(`firstname`, `lastname`, `birthdate`, `address`, `email`, `username`, `password`, `adminPic`) VALUES ('$fName','$lName','$birthDate','$address','$email','$username','$newPass','$adminPic')";
                        $query_run = mysqli_query($conn,$query1);
                        $query_run = mysqli_query($conn,$query);
                        move_uploaded_file($_FILES["adminPic"]["tmp_name"],$uploads_dir.$adminPic);?>
                <script>
                swal("Good job!", "You Updated your Profile Successfully!", "success").then(() => {
                    location.href = 'myProfile.php'
                })
                </script>
                <?php }}?>

                <!-- Modal -->
                <div class="modal fade" id="addProduct" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body main-secction rounded">
                                <form style="margin-left: 40px;" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div id="frame"
                                                class="text-center border border-dark rounded main-secction p-3 pl-3 pr-3">
                                                <img id="preview" style="height: 200px;"
                                                    class="img-fluid border border-dark rounded-circle w-100"
                                                    src="../adminPic/<?php echo $row['adminPic']; ?>"
                                                    class="avatar img-circle" alt="avatar">
                                                <p>Upload a different photo...</p>
                                                <input type="file" name="adminPic" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                        <div
                                            class="col-md-8 personal-info border border-dark rounded float-center main-secction pl-5 pr-5 ml-5">
                                            <center>
                                                <h5 class="mt-4 mb-3" id="name">Personal Information</h5>
                                            </center>

                                            <div
                                                class="form-row d-flex justify-content-around d-flex justify-content-around">
                                                <div class="col-auto">
                                                    <label>First Name</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-user"
                                                                    style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="fname"
                                                            placeholder="Firstname"
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
                                                        <input type="text" class="form-control" name="lname"
                                                            placeholder="Lastname"
                                                            value="<?php echo $row['lastname'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row d-flex justify-content-around">
                                                <div class="col-auto">
                                                    <label>Birthdate</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-birthday-cake"
                                                                    style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="birthdate"
                                                            placeholder="Birthdate"
                                                            value="<?php echo $row['birthdate'] ?>">
                                                    </div>
                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <div class="col-auto">
                                                    <label>Address</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-map-marker"
                                                                    style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="address"
                                                            placeholder="Address" value="<?php echo $row['address'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row d-flex justify-content-around">
                                                <div class="col-auto">
                                                    <label>Username</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text" style="color:  #e32467;;">
                                                                @</div>
                                                        </div>
                                                        <input type="text" class="form-control" name="username"
                                                            placeholder="Username"
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
                                                        <input type="text" class="form-control" name="email"
                                                            placeholder="Email" value="<?php echo $row['email'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row d-flex justify-content-around">
                                                <div class="col-auto">
                                                    <label>Current Password</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-key" style="color: #e32467;"></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" class="form-control"
                                                            placeholder="Password"
                                                            value="<?php echo $row['password'] ?>">
                                                    </div>
                                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <div class="col-auto">
                                                    <label>New Password</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"> <i class="fa fa-key"
                                                                    style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="password" name="newPass" class="form-control"
                                                            placeholder="New Password"
                                                            value="<?php echo $row['password'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button class="btn btn-outline-primary" style="margin-left: 150px;"
                                                    name="publish">Save Changes</button>
                                                <button class="btn btn-outline-danger" name="cancel">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- End of Content Wrapper -->


        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded " href="#page-top ">
            <i class="fas fa-angle-up "></i>
        </a>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
</body>
<script>
$(document).on("click", ".browse", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
});
$('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
</script>

</html>