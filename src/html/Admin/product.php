<?php
session_start();

require_once ("../config.php");

?>

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

    <title>Product</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- This is the link of Css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                <a class="nav-link" href="index.php">
                    <i class="fas fa-tachometer-alt" style="color: rgb(255, 0, 34);"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users" style="color: chartreuse;"></i>
                    <span style="font-size: 18px;">Users</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../Admin/Seller.php">Sellers</a>
                        <a class="collapse-item" href="../Admin/customer.php">Customers</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-book" style="color: rgb(0, 68, 255);"></i>
                    <span style="font-size: 15px;">Products</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../Admin/product.php">Products</a>
                        <a class="collapse-item" href="../Admin/order.php">Orders</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-address-book" style="color: rgb(255, 238, 0);"></i>
                    <span style="font-size: 17px;">Category</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../Admin/ratedBook.php">Most Rated Books</a>
                        <a class="collapse-item" href="../Admin/bestSoldBook.php">Best Sold Books</a>
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
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="h3 mb-0 text-gray-800" style="margin-left: 21px;">Products</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" style="margin-right: 26px;" data-toggle="modal" data-target="#addProduct">
                        Add Product
                  </button>

                </div>
              


                    <?php
                    if(isset($_POST['publish']))
                    {
                        $name = $_POST['sellerName'];
                        $bookTitle =$_POST['bookTitle'];
                        $bookPrice =$_POST['bookPrice'];
                        $bookGenre =$_POST['bookGenre'];
                        $bookCategory =$_POST['bookCategory'];
                        $bookPicture=$_FILES["bookPicture"]["name"];
                    
                        $sql =("SELECT * FROM `sellbooks` WHERE bookpicture=' $bookPicture'");
                        $query_run = mysqli_query($conn,$sql);
                    
                        if(mysqli_num_rows($query_run) > 0)
                        {
                           
                           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:30%;margin-left:380px;text-align:center">
                               <strong>Book Already Exists!</strong> Try Again.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                               </div>';
                     
                    
                        }else{
                    
                                $query = "INSERT INTO sellBooks (`sellername`, `booktitle`, `bookprice`, `bookgenre`,`bookcategory`, `bookpicture`) VALUES('$name','$bookTitle','  $bookPrice',' $bookGenre',' $bookCategory',' $bookPicture')";
                                $query_run = mysqli_query($conn,$query);
                    
                                if( $query_run)
                                {
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:30%;margin-left:380px;text-align:center">
                                    <strong>Book Published Successfully!</strong>
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                     </button>
                                    </div>';
                                } else{
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:30%;margin-left:380px;text-align:center">
                                    <strong>Book did not publish!</strong> Try Again.
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                     </button>
                                    </div>';
                                  
                                }
                        }
                    }
                    
                    ?>

                <!-- Modal -->
                <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header" style="color: black;font-size:20px">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                                <div class="modal-body">
                                    <div class="card" style="width: 29rem;color:black">
                                        <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Seller</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-user" style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="sellerName" placeholder="Full Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Title</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-book" style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bookTitle" placeholder="Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Price</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-money" style="color: #e32467;"></i></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bookPrice" placeholder="Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Genre</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-book" style="color: #e32467;"></i></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bookGenre" placeholder="ex.Romance">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Category:</label>
                                                <div class="container">
                                                    <div class="form-check" style="margin-left: 20px;">
                                                        <input class="form-check-input" type="checkbox" value="Fiction" name="bookCategory" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Fiction
                                                        </label>
                                                    </div>
                                                    <div class="form-check" style="margin-left: 20px;">
                                                        <input class="form-check-input" type="checkbox" value="Non-Fiction" name="bookCategory"  id="defaultCheck2">
                                                        <label class="form-check-label" for="defaultCheck2">
                                                            Non-Fiction
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1" style="margin-left: 15px;">Book Picture:</label>
                                                <div class="container" style="margin-left: 20px;">
                                                    <input type="file" class="form-control-file" name="bookPicture" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button class="btn btn-primary" style="margin-left: 150px;" name="publish">Publish</button>
                                                <button class="btn btn-danger" name="cancel">Cancel</button>
                                             </div>
                                        </form>
                                  </div>
                             </div>

                        </div>
                                           
                </div>
            </div>
        </div>


                <div class="container ">
                    <div class="container " style="box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19); ">

                        <div class="container "><br>
                            <h4 style="color: black; ">Fiction</h4>
                            <div class="row ">
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="card " style="width: 10rem; ">
                                            <img src="../Admin/img/romance.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                            <div class="card-body text-center ">
                                                <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Romance ">Romance</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="card " style="width: 10rem; ">
                                                <img src="../Admin/img/adventure.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                <div class="card-body text-center ">
                                                    <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Adventure ">Adventure</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="col-sm ">
                                                <div class="card " style="width: 10rem; ">
                                                    <img src="../Admin/img/drama.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                    <div class="card-body text-center ">
                                                        <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Drama ">Drama</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="col-sm ">
                                                <div class="col-sm ">
                                                    <div class="card " style="width: 10rem; ">
                                                        <img src="../Admin/img/fantasy.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                        <div class="card-body text-center ">

                                                            <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Fantasy ">Fantasy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <br>
                <div class="container ">
                    <div class="container " style="box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19); ">

                        <div class="container "><br>
                            <h4 style="color: black; ">Non-Fiction</h4>
                            <div class="row ">
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="card " style="width: 10rem; ">
                                            <img src="../Admin/img/essay.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                            <div class="card-body text-center ">
                                                <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Essay ">Essay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="card " style="width: 10rem; ">
                                                <img src="../Admin/img/poetry.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                <div class="card-body text-center ">
                                                    <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Poetry ">Poetry</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="col-sm ">
                                                <div class="card " style="width: 10rem; ">
                                                    <img src="../Admin/img/history.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                    <div class="card-body text-center ">
                                                        <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Romance ">History</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="col-sm ">
                                                <div class="col-sm ">
                                                    <div class="card " style="width: 10rem; ">
                                                        <img src="../Admin/img/biography.png " class="card-img-top " alt="Seller " style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                        <div class="card-body text-center ">

                                                            <button type="button " class="btn btn-primary " data-toggle="modal " data-target="#Romance ">Biography</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <!-- Modal For Books -->
                <!-- Romance -->
                <div class="modal fade " id="Romance " tabindex="-1 " aria-labelledby="RomanceText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="RomanceText " style="color: black; ">Romance</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>


                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Adventure Modal -->
                <div class="modal fade " id="Adventure " tabindex="-1 " aria-labelledby="AdventureText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="AdventureText " style="color: black; ">Adventure</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Drama Modal -->
                <div class="modal fade " id="Drama " tabindex="-1 " aria-labelledby="DramaText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="DramaText " style="color: black; ">Drama</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fantasy Modal -->
                <div class="modal fade " id="Fantasy " tabindex="-1 " aria-labelledby="FantasyText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="FantasyText " style="color: black; ">Fantasy</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Essay Modal -->
                <div class="modal fade " id="Essay " tabindex="-1 " aria-labelledby="EssayText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="EssayText " style="color: black; ">Essay</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Poetry Modal -->
                <div class="modal fade " id="Poetry " tabindex="-1 " aria-labelledby="PoetryText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="PoetryText " style="color: black; ">Poetry</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- History Modal -->
                <div class="modal fade " id="History " tabindex="-1 " aria-labelledby="HistoryText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="HistoryText " style="color: black; ">History</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Biography Modal -->
                <div class="modal fade " id="Biography " tabindex="-1 " aria-labelledby="BiographyText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="BoigraphyText " style="color: black; ">Fantasy</h5>
                                <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <table class="table table-sm " style="color: black;text-align: center; ">
                                    <thead>
                                        <tr>
                                            <th scope="col ">Book</th>
                                            <th scope="col ">Title</th>
                                            <th scope="col ">Seller</th>
                                            <th scope="col ">Price</th>
                                            <th scope="col ">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><img src="../../img/fan3.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Mery-an Telez</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><img src="../../img/fan4.jpg " alt=" " style="height: 80px; "></th>
                                            <td>The Memory Of Souls</td>
                                            <td>Christine Joy Ditchon</td>
                                            <td>Php 100.00</td>
                                            <td>
                                                <button type="button " class="btn btn-primary ">Edit</button>
                                                <button type="button " class="btn btn-danger ">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning " data-dismiss="modal ">Close</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <br>
            <footer class="sticky-footer bg-white ">
                <div class="container my-auto ">
                    <div class="copyright text-center my-auto ">
                        <span>Copyright &copy; Pick-A-Book 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
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

</html>