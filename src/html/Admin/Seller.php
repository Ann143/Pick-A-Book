<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../../css/account.css">
    <link rel="stylesheet" href="../../css/Seller.css">

    <title>Seller</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .btn {
            background-color: white;
            color: black;
        }
        
        #frame {
            margin-bottom: 20px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(202, 7, 82);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <h4 style="color: white;text-align: center;margin-top: 10px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    Pick-A-Book</h4>
            </a>

            <hr style="border: 1px solid rgb(238, 46, 222); width: 50%;">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span style="font-size: 18px;">Users</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="Seller.html">Sellers</a>
                        <a class="collapse-item" href="customer.html">Customers</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span style="font-size: 15px;">Products</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="product.html">Products</a>
                        <a class="collapse-item" href="order.html">Orders</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span style="font-size: 17px;">Category</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="ratedBook.html">Most Rated Books</a>
                        <a class="collapse-item" href="bestSoldBook.html">Best Sold Books</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notification
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message
                                </h6>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mery-an Telez</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="./myProfile.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <div id="content">
                        </nav>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h5 class="h3 mb-0 text-gray-800" style="margin-left: 21px;">Sellers</h5>
                        </div>
                        <div class="container">
                            <table id="example" class="table table-striped" style="width:90%;box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);text-align: center;">
                                <thead style="background-color: black;color: blanchedalmond;">
                                    <tr>
                                        <th>Seller's Name</th>

                                    </tr>
                                </thead>

                                <tbody style="color: black;">
                                    <tr data-toggle="modal" data-target="#exampleModal1">
                                        <td>Mery-an Telez</td>

                                    </tr>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="edit">Seller's Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body main-secction rounded">
                                                    <div class="row" id="upload1">
                                                        <div class="col-md-4 a">
                                                            <div id="frame" class="text-center border border-dark rounded " style="margin-top: 20px;">
                                                                <img id=" image1 " class="border border-dark rounded-circle " src="../../img/FB_IMG_16157132375310788.jpg " style=" height:250px; width:200px;margin-top:20px;" class=" avatar img-circle " alt="avatar ">
                                                                <div class="container ">
                                                                    <h5>Mery-an Telez</h5>
                                                                    <p>Joined Pick-A-Book on</p>
                                                                    <p>April 1(7 days ago)</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="basicInfo " class="col-md-7 personal-info border border-dark rounded float-center viewInfo ">

                                                            <p>Your Personal Information</p>
                                                            <div class="card rounded ">
                                                                <div class="card-header ">
                                                                    Basic Information
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Full Name</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            Mery-an Telez
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Birth Date</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            March 22, 1994
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Address</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            Nasipit Talamban, Cebu City
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Email</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            ebaritabryan@gmail.com
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="post " style="margin-top:30px;">
                                                        <div class="div-table ">
                                                            <div class="tr ">
                                                                <div class="tc ">Book Author</div>
                                                                <div class="tc ">Book Category</div>
                                                                <div class="tc ">Total Book Sold</div>
                                                                <div class="tc ">Total Amount</div>
                                                            </div>
                                                            <div class="tr ">
                                                                <div class="tc "> Liza Jackson</div>
                                                                <div class="tc "> Suspense <br> Thriller</div>
                                                                <div class="tc "> 65pcs</div>
                                                                <div class="tc "> 9750</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tr data-toggle="modal" data-target="#exampleModal2">
                                        <td> Christine Joy Ditchon </td>

                                    </tr>
                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="edit">Seller's Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body main-secction rounded">
                                                    <div class="row" id="upload2">
                                                        <div class="col-md-4 a">
                                                            <div id="frame" class="text-center border border-dark rounded " style="margin-top: 20px;">
                                                                <img id=" image1 " class="border border-dark rounded-circle " src="../../img/FB_IMG_16157132375310788.jpg " style=" height:250px; width:200px;margin-top:20px;" class=" avatar img-circle " alt="avatar ">
                                                                <div class="container ">
                                                                    <h5>Christine Joy Ditchon</h5>
                                                                    <p>Joined Pick-A-Book on</p>
                                                                    <p>April 1(7 days ago)</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="basicInfo " class="col-md-7 personal-info border border-dark rounded float-center viewInfo ">

                                                            <p>Your Personal Information</p>
                                                            <div class="card rounded ">
                                                                <div class="card-header ">
                                                                    Basic Information
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Full Name</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            Christine Joy Ditchon
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Birth Date</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            March 22, 1994
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Address</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            Nasipit Talamban, Cebu City
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Email</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            ebaritabryan@gmail.com
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form method="post " style="margin-top:30px;">
                                                        <div class="div-table ">
                                                            <div class="tr ">
                                                                <div class="tc ">Book Author</div>
                                                                <div class="tc ">Book Category</div>
                                                                <div class="tc ">Total Book Sold</div>
                                                                <div class="tc ">Total Amount</div>
                                                            </div>
                                                            <div class="tr ">
                                                                <div class="tc "> Liza Jackson</div>
                                                                <div class="tc "> Suspense <br> Thriller</div>
                                                                <div class="tc "> 65pcs</div>
                                                                <div class="tc "> 9750</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <tr data-toggle="modal" data-target="#exampleModal3">
                                        <td>Dexter Tampioc</td>

                                    </tr>
                                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="edit">Seller's Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body main-secction rounded">
                                                    <div class="row" id="upload3">
                                                        <div class="col-md-4 a">
                                                            <div id="frame" class="text-center border border-dark rounded " style="margin-top: 20px;">
                                                                <img id=" image1 " class="border border-dark rounded-circle " src="../../img/FB_IMG_16157132375310788.jpg " style=" height:250px; width:200px;margin-top:20px;" class=" avatar img-circle " alt="avatar ">
                                                                <div class="container ">
                                                                    <h5>Mery-an Telez</h5>
                                                                    <p>Joined Pick-A-Book on</p>
                                                                    <p>April 1(7 days ago)</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="basicInfo " class="col-md-7 personal-info border border-dark rounded float-center viewInfo ">

                                                            <p>Your Personal Information</p>
                                                            <div class="card rounded ">
                                                                <div class="card-header ">
                                                                    Basic Information
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Full Name</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            Mery-an Telez
                                                                        </div>
                                                                    </div>
                                                                    <hr />

                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Birth Date</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            March 22, 1994
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Address</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            Nasipit Talamban, Cebu City
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Email</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            ebaritabryan@gmail.com
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <form method="post " style="margin-top:30px;">
                                                        <div class="div-table ">
                                                            <div class="tr ">
                                                                <div class="tc ">Book Author</div>
                                                                <div class="tc ">Book Category</div>
                                                                <div class="tc ">Total Book Sold</div>
                                                                <div class="tc ">Total Amount</div>
                                                            </div>
                                                            <div class="tr ">
                                                                <div class="tc "> Liza Jackson</div>
                                                                <div class="tc "> Suspense <br> Thriller</div>
                                                                <div class="tc "> 65pcs</div>
                                                                <div class="tc "> 9750</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <tr data-toggle="modal" data-target="#exampleModal4">
                                        <td>David Bryan Pael</td>

                                    </tr>
                                    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="edit">Seller's Information</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body main-secction rounded">
                                                    <div class="row" id="upload4">
                                                        <div class="col-md-4 a">
                                                            <div id="frame" class="text-center border border-dark rounded " style="margin-top: 20px;">
                                                                <img id=" image1 " class="border border-dark rounded-circle " src="../../img/FB_IMG_16157132375310788.jpg " style=" height:250px; width:200px;margin-top:20px;" class=" avatar img-circle " alt="avatar ">
                                                                <div class="container ">
                                                                    <h5>David Bryan Pael</h5>
                                                                    <p>Joined Pick-A-Book on</p>
                                                                    <p>April 1(7 days ago)</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="basicInfo " class="col-md-7 personal-info border border-dark rounded float-center viewInfo ">

                                                            <p>Your Personal Information</p>
                                                            <div class="card rounded ">
                                                                <div class="card-header ">
                                                                    Basic Information
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Full Name</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            David Bryan Pael
                                                                        </div>
                                                                    </div>
                                                                    <hr />

                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Birth Date</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            March 22, 1994
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-md-3 ">
                                                                            <label style="font-weight:bold; ">Address</label>
                                                                        </div>
                                                                        <div class="col-md-8 col- ">
                                                                            Nasipit Talamban, Cebu City
                                                                        </div>
                                                                    </div>
                                                                    <hr />
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-md-3 col-5 ">
                                                                            <label style="font-weight:bold; ">Email</label>
                                                                        </div>
                                                                        <div class="col-md-8 col-6 ">
                                                                            ebaritabryan@gmail.com
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="post " style="margin-top:30px;">
                                                        <div class="div-table ">
                                                            <div class="tr ">
                                                                <div class="tc ">Book Author</div>
                                                                <div class="tc ">Book Category</div>
                                                                <div class="tc ">Total Book Sold</div>
                                                                <div class="tc ">Total Amount</div>
                                                            </div>
                                                            <div class="tr ">
                                                                <div class="tc "> Liza Jackson</div>
                                                                <div class="tc "> Suspense <br> Thriller</div>
                                                                <div class="tc "> 65pcs</div>
                                                                <div class="tc "> 9750</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade " id="logoutModal " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="exampleModalLabel ">Ready to Leave?</h5>
                    <button class="close " type="button " data-dismiss="modal " aria-label="Close ">
                        <span aria-hidden="true ">×</span>
                    </button>
                </div>
                <div class="modal-body ">Select "Logout " below if you are ready to end your current session.</div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary " type="button " data-dismiss="modal ">Cancel</button>
                    <a class="btn btn-primary " href="login.html ">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js "></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js "></script>

</body>

<!-- Footer -->
<footer class="sticky-footer bg-white ">
    <div class="container my-auto ">
        <div class="copyright text-center my-auto ">
            <span>Copyright &copy; Pick-A-Book 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->




</body>

</html>

</html>