<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../../css/feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Feedback</title>
</head>

<body>
    <div id="head">
        <div id="nav-logo">
        </div>
        <br /><br />
        <div>
            <nav class="navbar navbar-light navbar-expand-lg">
                <img id="logo" class="float-left rounded-circle" src="../../img/logo1.PNG" alt="Logo" />


                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span id="btn" class="navbar-toggler-icon" style="display: block; top: 112px;"></span>
                </button>
                <br /><br /><br />
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto" style="margin-top:-8%;background-color: #55acee;">
                        <li class="navbar-item">
                            <a id="link" href="../../../public/index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a id="link" href="../Public/about.php" class="nav-link">About</a>
                        </li>
                        <li class="navbar-item">
                            <a id="link" href="../Public/contact.php" class="nav-link">Contacts</a>
                        </li>
                        <a href="../Public/login.php"><button class="btn btn-primary" id="login">Log In</button></a>
                    </ul>
                </div>
            </nav>
        </div>
    </div><br><br><br>

    <!-- Main Body -->
    <div class="container">
        <h1 class="title">Feedbacks</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6 col-12 pb-4">
                    <div class="comment mt-4 text-justify float-left"> <img src="../../img/cj.jpg" alt="" class="rounded-circle" width="40" height="40">
                        <h4>Christine Joy Ditchon</h4> <span>- 20 October, 2018</span> <br>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                    </div>
                    <div class="text-justify darker mt-4 float-right"> <img src="../../img/mat.jpg" alt="" class="rounded-circle" width="40" height="40">
                        <h4>Mery-an Telez</h4> <span>- 20 October, 2018</span> <br>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                    </div>
                    <div class="comment mt-4 text-justify"> <img src="../../img/cj.jpg" alt="" class="rounded-circle" width="40" height="40">
                        <h4>Dexter Tampioc</h4> <span>- 20 October, 2018</span> <br>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                    </div>
                    <div class="darker mt-4 text-justify"> <img src="../../img/mat.jpg" alt="" class="rounded-circle" width="40" height="40">
                        <h4>David Bryan Pael</h4> <span>- 20 October, 2018</span> <br>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                    <form id="algin-form">
                        <div class="form-group">
                            <h4>Leave a feedback</h4> <label for="message">Feedback</label> <textarea name="msg" id="" msg cols="30" rows="5" class="form-control" style="background-color: rgb(245, 205, 205);"></textarea>
                        </div>
                        <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" class="form-control" style="background-color: rgb(245, 205, 205);"> </div>
                        <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control" style="background-color: rgb(245, 205, 205);"> </div>
                        <div class="form-group">
                            <p class="text-light">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                        </div>
                        <!-- <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div> -->
                        <div class="form-group"><button type="button" id="post" class="btn">Post Comment</button> </div>
                        <div class="form-group"><button id="cancel" name="cancel" class="btn btn-default" value="1">Cancel</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class=" text-center text-white " style="background-color: #b6034e; ">
        <div class="text-center p-3 " style="background-color: #83032e ">
            <section class="mb-4 ">
                <h3>ABOUT US</h3>
                <p>Our company sells many books by its categories. We make it easy for you to purchase by our products. For more info, contact with us. </p>
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
    </div>
</body>

</html>