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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/watchlist.css">

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
        <div class="top-nav-drop-down-privacy d-flex justify-content-end">
            <div class="drop-down my-account cursor-pointer">
                <img src="https://cdn2.iconfinder.com/data/icons/user-interface-169/32/about-256.png" alt="Profile">
                <div class="drop-nav-profile container">
                    <a href="./newAccount.php" style="color: black;text-decoration: none;">My Account</a>
                    <br>
                    <a href="../IndexFunctionallities/login.php" style="color: black;text-decoration: none;">Logout</a>
                </div>
            </div>
            <div class="drop-down settings cursor-pointer">
                <img src="https://cdn3.iconfinder.com/data/icons/streamline-icon-set-free-pack/48/Streamline-75-256.png" alt="Settings">
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
    <br><br>
    <div id="main">
        <div style="margin-top: 6%; width: 80%; margin-left: 14%; background-color: aliceblue;">
            <span style="font-size:25px;">My Bookmarks</span>
            <div id="most-recent" class="d-flex flex-row">
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>Added Today</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>Yesterday</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>May 05, 2021</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>May 04, 2021</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
            </div>
            <hr>
        </div>


</body>

</html>