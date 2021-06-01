<?php
    require_once ("../config.php");
    if(isset($_GET['edit'])){
        $adminId = $_POST['adminId'];
        $fName = $_POST['fname'];
        $lName =$_POST['lname'];
        $birthDate =$_POST['birthdate'];
        $address =$_POST['address'];
        $username =$_POST['username'];
        $email =$_POST['email'];
        $newPass =$_POST['newPass'];
        $profilePic=$_FILES["profilePic"]["name"];
        $uploads_dir = '../adminPic/';
        echo($row['address']);
        $query = "UPDATE `admin` SET `firstname`='$fname',`lastname`='$lName',`birthdate`='$birthDate',`address`='$address',`email`='$email',`username`='$username',`password`='$newPass',`adminPic`='$profilePic' WHERE `adminId`= '$adminID'";
        // $query = "UPDATE `admin` SET `firstname`= 'Dexter',`lastname`='asdfdgdafg',`birthdate`='dfahdfhdfh',`address`='dfghsdfghsfgh',`email`='fghstdghsdfh',`username`='sfgdfgdfg',`password`='adfhaadfh' WHERE `adminId`= '4'";
        mysqli_query($conn,$query);
        header("location: ./myProfile.php");
    }  
?>

<div class="modal fade" id="exampleModal<?php echo $row['adminId'] ?>" tabindex="-1" role="dialog"
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
                            <img id="preview" style="height: 200px;"
                                class="img-fluid border border-dark rounded-circle w-100"
                                src="https://www.trendsetter.com/pub/media/catalog/product/placeholder/default/no_image_placeholder.jpg"
                                class="avatar img-circle" alt="avatar">
                            <p>Upload a different photo...</p>
                            <input type="file" class="form-control-file" name="profilePic" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div id="info"
                        class="col-md-8 personal-info border border-dark rounded float-center main-secction ml-5">
                        <center>
                            <h5 class="mt-4 mb-3" id="name">Personal Information</h5>
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
                                        <input type="hidden" class="form-control" name="adminID"
                                            value="<?php echo $row['adminId'] ?>">
                                        <input  type="text" class="form-control" name="fname"
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
                            <div class="form-row">
                                <div class="col-auto">
                                    <label>Birthdate</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-birthday-cake"
                                                    style="color: #e32467;"></i></div>
                                        </div>
                                        <input type="text" class="form-control"
                                            name="birthdate" placeholder="Birthdate"
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
                            <div class="form-row">
                                <div class="col-auto">
                                    <label>Username</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="color:  #e32467;;">
                                                @</div>
                                        </div>
                                        <input type="text" class="form-control"
                                            name="username" placeholder="Username"
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
                            <div class="form-row">
                                <div class="col-auto">
                                    <label>Current Password</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-key" style="color: #e32467;"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control"
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
                                        <input type="password" name="newPass" class="form-control"
                                            placeholder="New Password">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                            <button type="button" name="edit" onclick="save()" class="btn btn-outline-primary ">Save
                                Changes</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function save() {
    
}
</script>