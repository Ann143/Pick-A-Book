<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../../jquery/cart.js"></script>

    <script src="../../jquery/navigators.js"></script>
    <link rel="stylesheet" href="../../css/navigators.css">

    <title>Document</title>
</head>

<body>
    <div class="top-nav d-flex align-items-center">
        <div class="top-nav-logo ">

        </div>
        <div class="side-nav-btn cursor-pointer">
            <img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-256.png" alt=Menu>
        </div>

        <div class="top-nav-drop-downs d-flex">
            <div class="drop-down notifications cursor-pointer">
                <img src="https://cdn1.iconfinder.com/data/icons/feather-2/24/bell-256.png" alt="Notifications">
            </div>
            <div title="cart" onclick="window.location = './cart.html'" class="drop-down cart  cursor-pointer">
                <img src="https://cdn1.iconfinder.com/data/icons/feather-2/24/shopping-cart-256.png" alt="Cart">
            </div>
        </div>
        <div class="top-nav-drop-down-privacy d-flex justify-content-end">
            <div class="drop-down my-account cursor-pointer">
                <img src="https://cdn2.iconfinder.com/data/icons/user-interface-169/32/about-256.png" alt="Profile">
                <div class="drop-nav-profile container">
                    <a href="./newAccount.php " style="color: black;text-decoration: none;">My Account</a>
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
            <div title="Dashboard" class="slide-show-icon">
                <img src="https://cdn4.iconfinder.com/data/icons/48-bubbles/48/48.Dashboard-256.png" alt="Dashbaord">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Dashboard</span>
        </div>
        <div onclick="window.location = './myLibrary.php'" class="slide-show-btn d-flex align-items-center cursor-pointer bg-red">
            <div title="My Library" class="slide-show-icon">
                <img src="https://cdn3.iconfinder.com/data/icons/education-and-learning-23/32/Education_and_Learning_education_book_library_search-128.png" alt="Books">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">My Library</span>
        </div>
        <div onclick="window.location = './bookmarks.php'" class="slide-show-btn d-flex align-items-center bg-sky cursor-pointer">
            <div title="Bookmarks" class="slide-show-icon">
                <img src="https://cdn0.iconfinder.com/data/icons/seo-170/32/SEO_bookmarking_service_services_book-256.png" alt="Watchlist">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">
                Bookmark
            </span>
        </div>
        <div onclick="window.location = './books.php'" class="slide-show-btn d-flex align-items-center cursor-pointer bg-green unexpand-side-nav">
            <div title="Books" class="slide-show-icon">
                <img src="https://cdn4.iconfinder.com/data/icons/48-bubbles/48/05.Tag-256.png" alt="Sales">
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Books</span>
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
        <br><br>
        <br>
        <div class="container">
            <div class="container w-75 float-left">

            </div><br>
            <div class="conatiner float-right w-25" style="background-color: tomato;">

            </div>

            <div class="container" style="color: white;">
                <div class="row">
                    <div class="w-75">
                        <table class="table border border-dark" style="background-color: rgb(233, 231, 229);box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
                            <h4 style="color: black;text-align: center;">YOUR CART</h4>
                            <thead>
                                <tr class="text-center" style="background-color: rgb(219, 43, 102);">
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="poduct-list">
                                <tr class="text-center">
                                    <td><img src="../img/bio2.jpg" alt="" height="130px"></td>
                                    <td class="mt-30">Romance</td>
                                    <td>Php <span class="price-tag">200.89</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><img src="../img/bio4.jpg" alt="" height="130px"></td>
                                    <td>Thriller</td>
                                    <td>Php <span class="price-tag">100.25</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><img src="../img/bio2.jpg" alt="" height="130px"></td>
                                    <td class="mt-30">Romance</td>
                                    <td>Php <span class="price-tag">200.60</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><img src="../img/bio4.jpg" alt="" height="130px"></td>
                                    <td>Thriller</td>
                                    <td>Php <span class="price-tag">700.12</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <div class="container" style="background-color: rgb(20, 20, 20);box-shadow: 0 6px 10px 0 rgba(128, 2, 50, 0.2), 0 6px 20px 0 rgba(128, 2, 50, 0.19);">
                            <h5>SUMMARY</h5>
                            <hr class="new1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <h6>Total:</h6>
                                    </div>
                                    <div class="col-sm">
                                        <label for="" class="total-payment">Php 0.00</label>
                                    </div>
                                </div>
                            </div>
                            <hr class="new1">


                            <h6 class="text-center">Payment</h6>
                            <hr class="new2">
                            <p class="text-center">Accepted Cards</p><br>

                            <span>Name on Cards</span><br>
                            <input type="text"><br>

                            <span>Credit Card Number</span>
                            <input type="text"><br>

                            <span>Exp Month</span>
                            <input type="text"><br><br>

                            <span>Exp Year</span>
                            <input type="text" class="w-25">&nbsp;

                            <span>CVV</span>
                            <input type="text" class="w-25">
                            <br><br>
                            <button type="button" class="btn btn-primary" style="background-color: rgb(221, 33, 111); width: 100%;">Checkout</button><br><br>
                            <p class="text-center">OR</p>
                            <button type="button" class="btn btn-primary" style="background-color: rgb(233, 225, 228); width: 100%;color: black;">Checkout with GCash</button><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>