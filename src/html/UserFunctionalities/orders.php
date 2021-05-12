<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>User Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../../jquery/dashboard.js"></script>
    <link rel="stylesheet" href="../../css/dashboard.css">
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
            <div onclick="window.location = './cart.html'" class="drop-down cart  cursor-pointer">
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
            <span id="toggle-span" class="hide-display align-items-center">My Order</span>
        </div>
    </div>

    <div id="main" class="container" style="margin-top: 8%;">
        <div>
            <h5>Keep track with your orders!</h5>

            <h4 class="text-center"> My Orders</h4>
        </div>
        <table class="table table-hover table-stripped">
            <thead style="background-color: black;color: white;text-align: center   ;">
                <tr>
                    <th>Book</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Seller</th>
                    <th>Price</th>
                    <th>Date Purchased</th>
                    <th>Date Received</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td><img src="../../img/1.jpg" alt="" height="90rem"> </td>
                    <td><b>SandMan</b> </td>
                    <td>Action: Pirated</td>
                    <td>Mery-an Telez</td>
                    <td>Php 200.00</td>
                    <td>May 06, 2021</td>
                    <td>May 07, 2021</td>
                    <td>Completed</td>
                    <td>
                        <i class="fa fa-close" style="font-size:25px;color:blue"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../img/3.jpg" alt="" height="90rem"> </td>
                    <td><b>Gideon</b> </td>
                    <td>Action: Pirated</td>
                    <td>Mery-an Telez</td>
                    <td>Php 200.00</td>
                    <td>May 06, 2021</td>
                    <td></td>
                    <td> Cancelled</td>
                    <td>
                        <i class="fa fa-close" style="font-size:25px;color:blue"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                    </td>
                </tr>
                <tr>
                    <td><img src="../../img/2.jpg" alt="" height="90rem"> </td>
                    <td><b>The Stand</b> </td>
                    <td>Romance</td>
                    <td>Mery-an Telez</td>
                    <td>Php 200.00</td>
                    <td>May 06, 2021</td>
                    <td></td>
                    <td> Pending</td>
                    <td>
                        <i class="fa fa-close" style="font-size:25px;color:blue"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>