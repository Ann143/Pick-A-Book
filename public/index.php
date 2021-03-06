<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link href="../src/img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Pick-A-Book</title>
    <link rel="stylesheet" href="../src/css/index.css" />
    <link rel="stylesheet" href="../src/css/landing.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script src="../src/jquery/index.js"></script> -->
    <style>
        .carousel-indicators li {
            background-color: rgb(240, 159, 159);
            background-color: rgba(218, 100, 100, 0.25);
        }
        
        .carousel-indicators .active {
            background-color: rgb(212, 14, 130);
        }
    </style>
    <script>
        $(document).ready(function() {

            $('.nav-item').on('click', function() {
                alert('hi');
                //Remove any previous active classes
                $('#link').removeClass('active');

                //Add active class to the clicked item
                $(this).addClass('active');
            })
        })
    </script>
</head>

<body>
    <div id="head">
        <div id="nav-logo">
        </div>
        <br /><br />
        <div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <img id="logo" class="float-left rounded-circle" src="../src/img/logo1.PNG" alt="Logo" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto" style="margin-top:-4%">
                        <li class="navbar-item">
                            <a id="link" href="../public/index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a id="link" href="../src/html/Public/about.php" class="nav-link">About</a>
                        </li>
                        <li class="navbar-item">
                            <a id="link" href="../src/html/Public/contact.php" class="nav-link">Contacts</a>
                        </li>
                        <a href="../src/html/Public/login.php"><button class="btn btn-primary"
                                id="login">Login</button></a>
                    </ul>
                </div>
            </nav>
        </div>
    </div><br><br><br><br>
    <div>

        <div class="gfg">
            <img src="../src/img/bg.PNG" style="background-size: cover;">
            <p class="first-txt">Increase Your Knowledge<br> By Getting Your Books Here</p>
            <p class="second-txt">Your Online E-Book Store</p>
            <a href="../src/html/IndexFunctionallities/login.html"><button class="btn btn-primary " role="button "
                    id="text3">Shop
                    Now!</button></a>
        </div>
        <div class="container mt-2 " style="background-color:hsl(0, 6%, 91%);box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
            <br>
            <hr class="new3">
            <h3 class="text-center">TRENDING ITEMS</h3>
            <hr class="new3">
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/rom3.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="#">The Invitations</a></h6>
                                            <h6 class="price">Php 300.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/rom2.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Roommate</a></h6>
                                            <h6 class="price">Php 350.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm h-100" style="height: 100px;">
                                    <div class="card" style="width: 12rem; box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/thriller1.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">The Hiding
                                                    Place</a></h6>
                                            <h6 class="price">Php 200.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem; box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/rom4.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Not My Match</a>
                                            </h6>
                                            <h6 class="price">Php 100.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/thriller3.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">The Missing
                                                    Girl</a></h6>
                                            <h6 class="price">Php 140.00</h>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/bio1.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Unfinished</a>
                                            </h6>
                                            <h6 class="price">Php 90.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/bio2.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">A Promised
                                                    Land</a></h6>
                                            <h6 class="price">Php 50.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm h-100" style="height: 100px;">
                                    <div class="card" style="width: 12rem; box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/fan2.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">The Ever
                                                    After</a></h6>
                                            <h6 class="price">Php 180.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem; box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/bio4.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php ">Finding My
                                                    Father</a></h6>
                                            <h6 class="price">Php 150.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/bio5.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Radio Girl</a>
                                            </h6>
                                            <h6 class="price">Php 240.00</h>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/crime1.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Maniac</a></h6>
                                            <h6 class="price">Php 190.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/crime2.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Last Call</a>
                                            </h6>
                                            <h6 class="price">Php 120.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm h-100" style="height: 100px;">
                                    <div class="card" style="width: 12rem; box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/crime3.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Guilty
                                                    Admissions</a></h6>
                                            <h6 class="price">Php 220.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem; box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/crime4.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Small Time</a>
                                            </h6>
                                            <h6 class="price">Php 160.00</h>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card" style="width: 12rem;box-shadow: 0 3px 6px 0 rgba(248, 28, 28, 0.2), 0 6px 20px 0 rgba(253, 4, 4, 0.19);">
                                        <img class="card-img-top" src="../src/img/crime5.jpg" alt="Card image cap">
                                        <div class="card-body text-center" style="height: 100px;">
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <span class="fa fa-star checked "></span>
                                            <h6><a href="../src/html/Public/login.php">Bad Medicine</a>
                                            </h6>
                                            <h6 class="price">Php 295.00</h>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                </div>
                <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only ">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container p-3 mb-2 mt-3 text-white text-center " style=" background-color: #dbbac7;padding:4px;">
            <div class="row ">
                <div class="col-sm-4 ">
                    <div class="card " style="background-color: #e2548f; ">
                        <a class=" "><img src="../src/img/partner.png " style="width: 20%; border-radius: 50%;height: 70px; margin-top: 10px;  ">
                            <h5 style="color: black; padding-top: 10px; ">Independent Sellers</h5>
                            <p>We are only selling E-books but if you want to have a hard copy with it, we have a partnered bookstore that will cater with your needs.</p>
                        </a>
                        <a class="btn btn-primary " href="../src/html/Public/partner.php" role="button ">Partnered Company</a>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card " style="background-color: #e2548f; ">
                        <a class=" "><img src="../src/img/ebook.png " style="width: 20%;border-radius: 50%;  height: 70px; margin-top: 10px; ">
                            <h5 style="color:black;padding-top: 10px; ">Not Just E-books</h5>
                            <p>We sell not just novel, rare, and used e-books but also the informative and collectibles e- books
                            </p>
                        </a>
                        <a class=" btn btn-primary " href="../src/html/Public/collective.php" role="button ">Collective
                            E-books</a>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    <div class="card " style="background-color: #e2548f; ">
                        <a class=" "><img src="../src/img/customer's feedback.jpg" style="width: 20%;;border-radius: 50%; height: 70px; margin-top: 10px;">
                            <h5 style="color:black;padding-top: 10px; ">Feel the Love</h5>
                            <p>We asked customers to tell us why they love shopping on Pick-A-Book and we were overwhelmed their kind words</p>
                        </a>
                        <a class="btn btn-primary " href="../src/html/Public/feedback.php" role="button ">Customer's Feedback</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Done -->
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