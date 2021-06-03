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

</head>
<?php
$name = $_GET['name'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$query = "SELECT DISTINCT * FROM users WHERE firstname = '".$fname. "' AND lastname = '".$lname."'";
$query_run = mysqli_query($conn,$query);
 
 $row = mysqli_fetch_array($query_run)
 ?>

<div class="" id="sellerInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="color:black">
    <div class="modal-dialog modal-xl">
        <div class="modal-content content">
            <div class="modal-header">
                <h4 class="modal-title" id="edit">Seller's Information</h4>
                <a href="Seller.php"><button class="btn btn-outline-primary">Back to List</button></a>
            </div>
            <div class="modal-body main-secction rounded">
                <div class="row" id="upload1">
                    <div class="col-md-4 a">
                        <div id="frame" class="text-center border border-dark rounded " style="margin-top: 20px;">
                            <img id=" image1 " class="border border-dark rounded-circle "
                                src="../adminPic/<?php echo $row['userPic']; ?>"
                                style=" height:250px; width:250px;margin-top:20px;" class=" avatar img-circle "
                                alt="avatar ">
                            <div class="container ">
                                <h5 class="text-primary mt-3"><?php echo $row['username']?></h5>
                                <p>Joined Pick-A-Book on</p>
                                <p><?php echo $row['created_at']?></p>
                            </div>
                        </div>
                    </div>

                    <div id="basicInfo"
                        class="col-md-7 personal-info border border-dark rounded float-center viewInfo p-4">

                        <p>Your Personal Information</p>
                        <div class="card rounded ">
                            <div class="card-header ">
                                Basic Information
                            </div>
                            <div class="card-body ">
                                <div class="row ">
                                    <div class="col-sm-3 col-md-3 col-5 ">
                                        <label style="font-weight:bold; ">Full Name:</label>
                                    </div>
                                    <div class="col-md-8 col-6 ">
                                        <?php echo $row['firstname']?> <?php echo $row['lastname']?>
                                    </div>
                                </div>
                                <hr />
                                <div class="row ">
                                    <div class="col-md-3 ">
                                        <label style="font-weight:bold; ">Birth Date:</label>
                                    </div>
                                    <div class="col-md-8 col- ">
                                        <?php echo $row['birthdate']?>
                                    </div>
                                </div>
                                <hr />
                                <div class="row ">
                                    <div class="col-md-3 ">
                                        <label style="font-weight:bold; ">Address:</label>
                                    </div>
                                    <div class="col-md-8 col- ">
                                        <?php echo $row['address']?>
                                    </div>
                                </div>
                                <hr />
                                <div class="row ">
                                    <div class="col-sm-3 col-md-3 col-5 ">
                                        <label style="font-weight:bold; ">Email:</label>
                                    </div>
                                    <div class="col-md-8 col-6 ">
                                        <?php echo $row['email']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post " style="margin-top:30px;">
                    <div class="div-table ">
                        <div class="tr ">
                            <div class="tc ">Book Title</div>
                            <div class="tc ">Book Category</div>
                            <div class="tc ">Book Genre</div>
                            <div class="tc ">Book Price</div>
                            <div class="tc ">Date Publication</div>
                        </div>

                        <?php 
                        $sql = 'SELECT booktitle, bookcategory, bookgenre,bookprice, created_at FROM `sellbooks` WHERE sellername = "'.$name.'"';
                        $result = $conn -> query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()):?>
                        
                        <div class="tr ">
                            <div class="tc "><?php echo $row['booktitle'];?></div>
                            <div class="tc "><?php echo $row['bookcategory'];?></div>
                            <div class="tc "><?php echo $row['bookgenre'];?></div>
                            <div class="tc "><?php echo $row['bookprice'];?></div>
                            <div class="tc "><?php echo $row['created_at'];?></div>
                        </div>
                        <?php
                        endwhile;
                    }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>