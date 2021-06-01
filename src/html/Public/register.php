<?php

//Include connection file
require_once ("../config.php");

//Define variables and initialize with empty values
$fname = $lname = $birthdate = $address = $username = $email = $datecreated = $password = $confirmPassword = "";
$fname_err = $lname_err = $birthdate_err = $address_err = $username_err = $email_err = $password_err = $confirmPassword_err = "";

//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    //Validate firstname
    if(empty(trim($_POST["fname"]))){
        $fname_err = "Please enter your firstname.";
    } else{
        $fname = trim($_POST["fname"]);
    }

    //Validate lastname
    if(empty(trim($_POST["lname"]))){
        $lname_err = "Please enter your lastname.";
    } else{
        $lname = trim($_POST["lname"]);
    }

     //Validate birthdate
     if(empty(trim($_POST["birthdate"]))){
        $birthdate_err = "Please enter your birthdate.";
    }else{
        $birthdate = trim($_POST["birthdate"]);
    }

    //Validate Address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your address.";
    }else{
        $address = trim($_POST["address"]);
    }

    //Validate username
    if(empty(trim($_POST["username"]))){

        $username_err = "Please enter a username.";

    } else{

        //Prepare a select statement
        $sql = "SELECT userId FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($conn,$sql)){
            //Bind varibales to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //Set parameters
            $param_username = trim($_POST["username"]);

            //Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                //Store result
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again!";
            }

            //CLose statement
            mysqli_stmt_close($stmt);
        }

    }

     //Validate email
     if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    }else{
        $email = trim($_POST["email"]);
    }

    //Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    //Validate confirm password
    if(empty(trim($_POST["confirmPassword"]))){
        $confirmPassword_err = "Please confirm password.";
    } else{
        $confirmPassword = trim($_POST["confirmPassword"]);
        if(empty($password_err) && ($password != $confirmPassword)){
            $confirmPassword_err = "Password did not match.";
        }
    }

    // //Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) 
    && empty($birthdate_err) && empty($address_err)
    && empty($email_err) && empty($username_err) 
    && empty($password_err) && empty($confirmPassword_err))
    {

     date_default_timezone_set('Asia/Manila');
     $datecreated = date("Y-m-d h:i:s");

    //Prepare an insert statement
    $sql = "INSERT INTO users (firstname,lastname,birthdate,address,username,email,password,created_at) VALUES (?,?,?,?,?,?,?,?)";

    if($stmt = mysqli_prepare($conn,$sql)){
        //Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssssssss", $param_fname, $param_lname, $param_birthdate, $param_address, $param_username, $param_email, $param_password,$param_datecreated);

        //Set parameters
        $param_fname = $fname;
        $param_lname = $lname;
        $param_birthdate = $birthdate;
        $param_address = $address;
        $param_username = $username;
        $param_email = $email;
        $param_password =$password; //CreateS a password hash
        $param_datecreated =$datecreated;
     

        //Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            //Redirect to login page
            header("location: ../Public/login.php");
         
        } else{
            echo "Oops! Something went wrong. Please try again";
        }

        //Close statement
        mysqli_stmt_close($stmt);
    }
 }

 //Close connection
 mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/login.css">

</head>
<style>
    .nav-link {
        border: black 2px solid;
        width: 100px;
        margin-left: 30px;
        text-align: center;
        color: white;
        background-color: black;
        border-radius: 15%;
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 5px;
    }
    
    #head {
        background-color: #aa093e;
        position: fixed;
        width: 100%;
        z-index: 100;
        height: 106px;
    }
    
    link:hover {
        color: #aa093e;
    }
    
    #logo {
        max-width: 110px;
        max-height: 114px;
        margin-top: -4%;
        cursor: pointer;
    }
</style>


<body>
    <div id="head">
        <div id="nav-logo">
        </div>
        <br /><br />
        <div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <img id="logo" class="float-left rounded-circle" src="../../img/logo1.PNG" alt="Logo" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto" style="margin-top:-4%">
                        <li class="navbar-item">
                            <a href="../../../public/index.php " class=" nav-link active " style="color: white;">Home</a>
                        </li>
                        <li class="navbar-item ">
                            <a href="../Public/about.php" class=" nav-link " style="color: white;">About</a>
                        </li>
                        <li class="navbar-item ">
                            <a href="../Public/contact.php" class="nav-link " style="color: white;">Contacts</a>
                        </li>
                        <a href="../Public/login.php"><button class=" btn btn-primary "
                                class="log " style="margin-left: 25px;  font-weight: bold;border-radius: 18%;   height: 45px;border: black 2px solid;">Log In</button></a>
                    </ul>
                </div>
        </div>
    </div><br><br>

    <div class="fullcontent ">
        <div class="headings ">
            <h1 style="font-size: 90px; ">Pick-A-Book</h1>
            <h2 style="font-size: 35px; text-align: center; ">Your Online E-Book Store</h2>
            <h3 style="font-size: 30px;color: #dd5589; ">A great place to be stranded!</h3>
        </div>
        <div class="formbox ">
            <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">Register</h3>
            <form id="form " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for=" ">Firstname</label>
                <input type="text " name="fname" class="form-control asd <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" 
                value="<?php echo $fname; ?>" id="fname" required style="color:"/>
                <span class="invalid-feedback"><?php echo $fname_err; ?></span>
                <label for=" ">Lastname</label>
                <input type="text " name="lname" class=" form-control asd <?php echo (!empty($lname_err)) ? 'is-invalid' : ''; ?>" 
                value="<?php echo $lname; ?>" id="lname" required  style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $lname_err; ?></span>
                <label for=" ">Birthdate</label>
                <input type="text" name="birthdate" placeholder="Ex. May 21, 1999" class="form-control asd <?php echo (!empty($birthdate_err)) ? 'is-invalid' : ''; ?>" 
                value="<?php echo $birthdate; ?>" id="birthdate" required  style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $birthdate_err; ?></span>
                <label for=" ">Address</label>
                <input type="text " name="address" class=" form-control asd <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?> " 
                value="<?php echo $address; ?>" id="address" required style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $address_err; ?></span>
                <label for=" ">Username</label>
                <input type="text " name="username" class="form-control asd <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> " 
                value="<?php echo $username; ?>" id="username" required style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <label for=" ">Email</label>
                <input type="email" name="email" class="form-control asd <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?> " 
                value="<?php echo $email; ?>" id="email" required style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                <label for=" ">Password</label>
                <input type="password" name="password" class="form-control asd <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> " 
                value="<?php echo $password; ?>" id="password" required style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <label for=" ">Confirm Password</label>
                <input type="password" name="confirmPassword" class=" form-control asd <?php echo (!empty($confirmPassword_err)) ? 'is-invalid' : ''; ?>" 
                value="<?php echo $confirmPassword; ?>" id="confirmPassword" required style="color:#fc3279"/>
                <span class="invalid-feedback"><?php echo $confirmPassword_err; ?></span>
                <button type="submit" class="mainbox ">Submit</button>
                <label for=" ">Already have an account?</label>
                <a href="../Public/login.php" class="mainbox ">Log in here!</a>
            </form>
        </div>
    </div>
    <footer class=" text-center text-white " style="background-color: #b6034e; ">
        <div class="text-center p-3 " style="background-color: #83032e ">
            <section class="mb-4 ">
                <h3>ABOUT US</h3>
                <p>Our company sells many books by its categories. We make it easy for you to purchase by our products. For more info, contacts with us. </p>
                <hr class="new4 ">
                <h4>Connect with Pick-A-Book</h4>
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1 " style="background-color: #3b5998; " href="#! " role="button "><i class="fa fa-facebook "></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1 " style="background-color: #0082ca; " href="#! " role="button "><i class="fa fa-linkedin "></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1 " style="background-color: #ac2bac; " href="#! " role="button "><i class="fa fa-instagram "></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1 " style="background-color: #55acee; " href="#! " role="button "><i class="fa fa-twitter "></i></a>

                <!-- Youtube -->
                <a class="btn btn-primary btn-floating m-1 " style="background-color: #dd4b39; " target="blank " href="https://www.youtube.com/watch?v=au61CGsFw0s " role="button "><i class="fa fa-youtube "></i></a>
            </section>
            <h6>All Rights Reserved &copy; 2021</h6>
        </div>
    </footer>
</body>

</div>
</footer>

</body>

</html>