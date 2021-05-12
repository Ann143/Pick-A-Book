<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="../../jquery/admin.js"></script>
    <link rel="stylesheet" href="../../css/account.css">
    <link rel="stylesheet" href="../../css/admin.css">

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
    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->

    <div style="margin-top: 10%;">
        <div id="viewInfo" class="container col-md-8 viewInfo" style="margin-right:7rem ;">
            <div class="row" id="upload1">
                <div class="col-md-4">
                    <div id="frame" class="text-center border border-dark rounded viewInfo">
                        <img id="image1" class="img-fluid border border-dark rounded-circle w-100" src="../../img/FB_IMG_16157132375310788.jpg" class="avatar img-circle" alt="avatar">
                        <div class="container">
                            <h5>Ann</h5>
                            <p>Joined Pick-A-Book on</p>
                            <p>April 1(7 days ago)</p>
                        </div>

                    </div>
                </div>

                <div id="basicInfo" class="col-md-7 personal-info border border-dark rounded float-center viewInfo">
                    <h4>Profile</h4>
                    <p>Your Personal Information</p>

                    <div class="card rounded">
                        <div class="card-header">
                            Basic Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-5">
                                    <label style="font-weight:bold;">Full Name</label>
                                </div>
                                <div class="col-md-8 col-6">
                                    Mery-an Telez
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-weight:bold;">Birth Date</label>
                                </div>
                                <div class="col-md-8 col-">
                                    March 22, 1994
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-weight:bold;">Address</label>
                                </div>
                                <div class="col-md-8 col-">
                                    Nasipit Talamban, Cebu City
                                </div>
                            </div>
                            <hr />


                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-5">
                                    <label style="font-weight:bold;">Email</label>
                                </div>
                                <div class="col-md-8 col-6">
                                    ebaritabryan@gmail.com
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-5">
                                    <label style="font-weight:bold;">Password</label>
                                </div>
                                <div class="col-md-8 col-6">
                                    Not Set
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit
                            Profile</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div id="frame" class="text-center border border-dark rounded main-secction">
                                    <img id="image" class="img-fluid border border-dark rounded-circle w-100" src="../../img/FB_IMG_16157132375310788.jpg" class="avatar img-circle" alt="avatar">
                                    <p>Upload a different photo...</p>

                                    <input type="file" class="form-control">
                                </div>
                            </div>

                            <div id="info" class="col-md-8 personal-info border border-dark rounded float-center main-secction">
                                <center>
                                    <h5>Personal Information</h5>
                                </center>
                                <form style="margin-left: 90px;">
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>First Name</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Firstname">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Last Name</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Lastname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>Birthdate</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-birthday-cake" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Birthdate">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Address</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>Username</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text" style="color:  #e32467;;">@</div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>Email</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-auto">
                                            <label>Password</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-key" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password">
                                            </div>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <div class="col-auto">
                                            <label>New Password</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"> <i class="fa fa-key" style="color: #e32467;"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="New Password">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" id="save" class="btn btn-primary ">Save
                                        Changes</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script><br>
    </div>

</body>

</html>