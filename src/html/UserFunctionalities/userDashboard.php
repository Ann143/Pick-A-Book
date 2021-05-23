<?php
session_start();

require_once ("../config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/books.css">
    <script src="../../jquery/books.js"></script>

    <script src="../../jquery/navigators.js"></script>
    <link rel="stylesheet" href="../../css/navigators.css">
</head>

<body>
    <div class="top-nav d-flex align-items-center">
        <div class="top-nav-logo ">
            <h3 style="text-align: center;margin-top: 6%;font-family: Georgia, 'Times New Roman', Times, serif;">Pick-A-Book</h3>
        </div>
        <div class="side-nav-btn cursor-pointer">
            <img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-256.png" alt=Menu>
        </div>

        <div class="top-nav-drop-downs d-flex">
            <div class="drop-down notifications cursor-pointer">
                <img src="https://cdn1.iconfinder.com/data/icons/feather-2/24/bell-256.png" alt="Notifications">
            </div>
            <div onclick="window.location = './cart.php'" class="drop-down cart  cursor-pointer">
                <img src="https://cdn1.iconfinder.com/data/icons/feather-2/24/shopping-cart-256.png" alt="Cart">
            </div>
        </div>
       
        <div class="top-nav-drop-down-privacy d-flex justify-content-end" style="color:#f21142">
            <div class=" drop-down my-account cursor-pointer">
            <b><?php echo htmlspecialchars($_SESSION["username"]); ?> </b>
                <div class="drop-nav-profile container">
                    <a href="./newAccount.php" style="color: black;text-decoration: none;">My Account</a>
                    <br>
                    <a href="../IndexFunctionallities/login.php" style="color: black;text-decoration: none;">Logout</a>
                </div>
            </div>
          
        </div>
    </div>
    <div class="side-nav">
        <div onclick="window.location ='./userDashboard.php'" class="slide-show-btn d-flex align-items-center cursor-pointer bg-green unexpand-side-nav">
            <div class="slide-show-icon">
                <img src="https://cdn4.iconfinder.com/data/icons/48-bubbles/48/48.Dashboard-256.png" alt="Dashbaord">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Dashboard</span>
        </div>
        <div onclick="window.location = './myLibrary.php'" class="slide-show-btn d-flex align-items-center cursor-pointer bg-red">
            <div class="slide-show-icon">
                <img src="https://cdn3.iconfinder.com/data/icons/education-and-learning-23/32/Education_and_Learning_education_book_library_search-128.png" alt="Books">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">My Library</span>
        </div>
        <div onclick="window.location = './bookmarks.php'" class="slide-show-btn d-flex align-items-center bg-sky cursor-pointer">
            <div class="slide-show-icon">
                <img src="https://cdn0.iconfinder.com/data/icons/seo-170/32/SEO_bookmarking_service_services_book-256.png" alt="Watchlist">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">
                Bookmark
            </span>
        </div>
        <div onclick="window.location = './sell.php'" class="slide-show-btn d-flex align-items-center cursor-pointer bg-green unexpand-side-nav">
            <div class="slide-show-icon">
                <img src="https://cdn4.iconfinder.com/data/icons/48-bubbles/48/05.Tag-256.png" alt="Sales">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Sell</span>
        </div>
        <div onclick="window.location = './orders.php'" class="slide-show-btn d-flex align-items-center cursor-pointer bg-red">
            <div class="slide-show-icon">
                <img src="https://cdn3.iconfinder.com/data/icons/e-commerce-308/32/document_hourglass_order_history-256.png" alt="Orders">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Orders</span>
        </div>
    </div>

    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->

    <div id="main">
        <div style="width: 95%; margin-left: 5%; margin-top: 5%;">
            <div class="search-product">
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div class="browse-main">

                <section class="sidebar">
                    <center>
                        <span style="color: black;">What's on your mind?</span>
                        <br>
                        <br>
                    </center>


                    <div onclick="showCategory()">
                        <span class="category" style="color: black;">Category</span> <svg id="switch-category" fill="currentColor" preserveAspectRatio="xMidYMid meet" height="8" width="13" viewBox="0 0 13 8" style="vertical-align:middle">
                            <title>Chevron Up</title>
                            <g>
                                <g stroke="none" stroke-width="1" fill-rule="evenodd" fill="none">
                                    <g transform="translate(1.000000, 2.000000)" stroke-width="2" stroke="currentColor">
                                        <polyline
                                            transform="translate(5.500000, 2.500000) rotate(90.000000) translate(-5.500000, -2.500000) "
                                            points="8 -2.5 3 2.5 8 7.5"></polyline>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <ul class="category-list">
                        <div onclick="showFiction()">
                            <span class="category" style="color: black;">Fiction</span> <svg id="switch-category" fill="currentColor" preserveAspectRatio="xMidYMid meet" height="8" width="13" viewBox="0 0 13 8" style="vertical-align:middle">
                                <title>Chevron Up</title>
                                <g>
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd" fill="none">
                                        <g transform="translate(1.000000, 2.000000)" stroke-width="2"
                                            stroke="currentColor">
                                            <polyline
                                                transform="translate(5.500000, 2.500000) rotate(90.000000) translate(-5.500000, -2.500000) "
                                                points="8 -2.5 3 2.5 8 7.5"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <ul class="Fiction-list">
                            <li>
                                <a href="#">Romance</a>
                            </li>
                            <li>
                                <a href="#">Adventure</a>
                            </li>
                            <li>
                                <a href="#">Drama</a>
                            </li>
                            <li>
                                <a href="#">Fantasy</a>
                            </li>

                        </ul>

                        <div onclick="showNonFiction()">
                            <span class="category" style="color: black;">Non-Fiction</span> <svg id="switch-category" fill="currentColor" preserveAspectRatio="xMidYMid meet" height="8" width="13" viewBox="0 0 13 8" style="vertical-align:middle">
                                <title>Chevron Up</title>
                                <g>
                                    <g stroke="none" stroke-width="1" fill-rule="evenodd" fill="none">
                                        <g transform="translate(1.000000, 2.000000)" stroke-width="2"
                                            stroke="currentColor">
                                            <polyline
                                                transform="translate(5.500000, 2.500000) rotate(90.000000) translate(-5.500000, -2.500000) "
                                                points="8 -2.5 3 2.5 8 7.5"></polyline>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <ul class="NonFiction-list">

                            <li>
                                <a href="#">Essay</a>
                            </li>
                            <li>
                                <a href="#">History</a>
                            </li>
                            <li>
                                <a href="#">Poetry</a>
                            </li>
                            <li>
                                <a href="#">Biography/Autobioraphy</a>
                            </li>

                        </ul>

                    </ul>

                    <!-- <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol> -->

                </section>

                <section class="main">
                    <?php

                    $query = "SELECT sellername,booktitle,bookgenre,bookprice,LTRIM(bookpicture) AS img FROM sellbooks";
                    $query_run = mysqli_query($conn,$query);
                    $check_product = mysqli_num_rows($query_run) > 0;

                    if($check_product)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                            <div class="product">
                                <img src="../Products/<?php echo $row['img'];    ?>" alt="" class="product-img" height="180px" >
                                <br>
                                <span class="product-name color"> <?php echo $row['booktitle']; ?>
                                </span>
                                <br>
                                <span class="product-genre color"> <?php echo $row['bookgenre']; ?>
                                <br>
                                <span class="product-price color">&#8369;<?php echo $row['bookprice']; ?>.00</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>

                            <?php
                            
                        }

                    }else
                    {
                        echo "No Product Found!";
                    } 
                    ?>
                </section>
            </div>

        </div>
    </div>




</body>

</html>