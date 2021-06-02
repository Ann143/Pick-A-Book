<?php
require_once ("../config.php");
require_once ("./header.php");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>

<head>
    <title>My Account</title>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="../../jquery/admin.js"></script>
    <link rel="stylesheet" href="../../css/account.css">
    <link rel="stylesheet" href="../../css/admin.css">


</head>

<body>

    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->

    <div style="margin-top: 2%;">
        <div id="viewInfo" class="container col-md-8 viewInfo" style="margin-right:10rem ;">
            <div class="row" id="upload1">
                <div class="col-sm-4">
                    <div id="frame" class="text-center border border-dark rounded viewInfo">
                        <img id="image1" class="img-fluid border border-dark rounded-circle w-100"
                            src="../adminPic/<?php echo $row['userPic']; ?>" class="avatar img-circle" alt="avatar">
                        <div class="container">
                            <h5><?php echo $username?></h5>
                            <p>Joined Pick-A-Book on</p>
                            <p><?php echo $row['created_at']; ?></p>
                        </div>

                    </div>
                </div>

                <div id="basicInfo" class="col-lg-7 personal-info border border-dark rounded float-center viewInfo p-4">
                    <h4>Profile</h4>
                    <p>Your Personal Information</p>

                    <div class="card rounded">
                        <div class="card-header">
                            Basic Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-weight:bold;">Full Name:</label>
                                </div>
                                <div class="col-md-8 col-6">
                                    <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?>
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-weight:bold;">Birth Date:</label>
                                </div>
                                <div class="col-md-8 col-">
                                    <?php echo $row['birthdate'] ?>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-weight:bold;">Address:</label>
                                </div>
                                <div class="col-md-8 col-">
                                    <?php echo $row['address'] ?>
                                </div>
                            </div>
                            <hr />


                            <div class="row">
                                <div class="col-md-4">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous"></script>
        <?php
                    if(isset($_POST['publish'])){
                        
                        $userId = $row['userId'];
                        $fName = $_POST['fname'];
                        $lName =$_POST['lname'];
                        $birthDate =$_POST['birthdate'];
                        $address =$_POST['address'];
                        $username =$_POST['username'];
                        $email =$_POST['email'];
                        $newPass =$_POST['newPass'];
                        $created_at = $row['created_at'];
                        $userPic=$_FILES['userPic']["name"];   

                        $uploads_dir = '../adminPic/';
                        $uploads_dir . basename($_FILES['userPic']["name"]);
                        if(empty($_FILES['userPic']["name"])) {
                            $query = "UPDATE `users` SET `firstname`='$fName',`lastname`='$lName',`birthdate`='$birthDate',`address`='$address',`username`='$username',`email`='$email',`password`='$newPass',`created_at`= '$created_at' WHERE `userId`= $userId";
                            $query_run = mysqli_query($conn,$query);?>
        <script>
        swal("Good job!", "You updated your Profile Successfully!", "success").then(() => {
            location.href = 'newAccount.php'
        })
        </script>
        <?php } else {
                            $query1 = "DELETE FROM `users` WHERE `userId` = $userId";
                            $query="INSERT INTO `users` (`firstname`, `lastname`, `birthdate`, `address`, `username`, `email`, `password`, `created_at`, `userPic`) VALUES ('$fName','$lName','$birthDate','$address','$username','$email','$newPass','$created_at','$userPic')";
                            $query_run = mysqli_query($conn,$query);
                            $query_run = mysqli_query($conn,$query1);
                            move_uploaded_file($_FILES["userPic"]["tmp_name"],$uploads_dir.$userPic);?>

        <script>
        swal("Good job!", "You updated your Profile Successfully!", "success").then(() => {
            location.href = 'newAccount.php'
        })
        </script>

        <?php }}?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            src="../adminPic/<?php echo $row['userPic']; ?>" class="avatar img-circle"
                                            alt="avatar">

                                        <p>Upload a different photo...</p>

                                        <input type="file" name="userPic" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div
                                    class="col-md-8 personal-info border border-dark rounded float-center main-secction pl-5 pr-5 ml-5">
                                    <center>
                                        <h5 class="mt-4 mb-3" id="name">Personal Information</h5>
                                    </center>

                                    <div class="form-row d-flex justify-content-around d-flex justify-content-around">
                                        <div class="col-auto">
                                            <label>First Name</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="fname"
                                                    placeholder="Firstname" value="<?php echo $row['firstname'] ?>">
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
                                                    placeholder="Lastname" value="<?php echo $row['lastname'] ?>">
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
                                                    placeholder="Birthdate" value="<?php echo $row['birthdate'] ?>">
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
                                                    placeholder="Username" value="<?php echo $row['username'] ?>">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Email</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="email" placeholder="Email"
                                                    value="<?php echo $row['email'] ?>">
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
                                                <input type="password" class="form-control" placeholder="Password"
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
                                                    value="<?php echo $row['password'] ?>" placeholder="New Password">
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
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>

        <!--         
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                                <div id="frame" class="text-center border border-dark rounded main-secction">
                                    <img id="preview" style="height: 200px;"
                                        class="img-fluid border border-dark rounded-circle w-100"
                                        src="https://www.trendsetter.com/pub/media/catalog/product/placeholder/default/no_image_placeholder.jpg"
                                        class="avatar img-circle" alt="avatar">
                                    <p>Upload a different photo...</p>

                                    <input type="file" class="form-control">
                                </div>
                            </div>

                            <div id="info"
                                class="col-md-8 personal-info border border-dark rounded float-center main-secction">
                                <center>
                                    <h5>Personal Information</h5>
                                </center>
                                <form style="margin-left: 90px;" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>First Name</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Firstname" value="<?php echo $row['firstname'] ?>">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Last Name</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Lastname" value="<?php echo $row['lastname'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>Birthdate</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-birthday-cake"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Birthdate" value="<?php echo $row['birthdate'] ?>">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Address</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Address" value="<?php echo $row['address'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>Username</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text" style="color:  #e32467;;">@</div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Username" value="<?php echo $row['username'] ?>">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Email</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Email" value="<?php echo $row['email'] ?>">
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
                                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                                    placeholder="Password">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>New Password</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"> <i class="fa fa-key"
                                                            style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="New Password">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" id="save" class="btn btn-primary ">Save
                                        Changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br> -->
        <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
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
    </div>

</body>

</html>