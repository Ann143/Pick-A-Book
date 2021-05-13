


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/login.css">

</head>

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
                            <a id="link" href="../../../public/index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a id="link" href="../../html/Public/about.php" class="nav-link">About</a>
                        </li>
                        <li class="navbar-item">
                            <a id="link" href="../Public/contact.php" class="nav-link">Contacts</a>
                        </li>
                        <a href="../Public/userDashboard.php"><button class="btn btn-primary"  id="login">Login</button></a></button>
                        </a>

                    </ul>
                </div>
            </nav>
        </div>
    </div><br><br>

    <div class="fullcontent">
        <div class="headings">
            <h1 style="font-size: 90px;">Pick-A-Book</h1>
            <h2 style="font-size: 40px; text-align: center;">Your Online E-Book Store</h2>
            <h3 style="font-size: 40px;color: #dd5589;">A collection you will love!</h3>
        </div>
        <div class="formbox">
            <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Log In</h3>
            <form class="login" action="" method="post">
                <label for="">Email</label>
                <input type="email" name="email" class="asd" />
                <label for="">Password</label>
                <input type="password" id="" name="password" class="asd" />
                <a href="../Admin/index.php"></a> <input id="btn" type="submit" name="submit" value="Log In" class="mainbox"></a>
                <label for="">New customer?</label>
                <a href="../../html/Public/register.php" class="mainbox" id="register">Register Now</a>
            </form>
        </div>
    </div>
    <footer class=" text-center text-white " style="background-color: #b6034e; ">
        <div class="text-center p-3 " style="background-color: #83032e ">
            <section class="mb-4 ">
                <h3>ABOUT US</h3>
                <p>Our company sells many books by its categories. We make it easy for you to purchase by our products. For more info, contacts with us. </p>
                <hr class="new4">
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
                <a class="btn btn-primary btn-floating m-1 " style="background-color: #dd4b39; " href="#! " role="button "><i class="fa fa-youtube "></i></a>
            </section>
            <h6>All Rights Reserved &copy; 2021</h6>
        </div>
    </footer>
</body>

</div>
</footer>

</body>

</html>