<?php
session_start();
require_once ("../config.php");
require_once ("./header.php");
?>

<head>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Product</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- This is the link of Css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h5 class="h3 mb-0 text-gray-800" style="margin-left: 21px;">Products</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" style="margin-right: 26px;" data-toggle="modal"
                        data-target="#addProduct">

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
                    
                       
                        $uploads_dir = '../Products/';
                    
                        if(file_exists($uploads_dir.$bookPicture))
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
                    
                                if($query_run)
                                {
                                    move_uploaded_file($_FILES["bookPicture"]["tmp_name"],$uploads_dir.$bookPicture);
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
                <div class="modal fade" id="addProduct" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <div class="input-group-text"><i class="fa fa-user"
                                                                    style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="sellerName"
                                                            placeholder="Full Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Title</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-book"
                                                                    style="color: #e32467;"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bookTitle"
                                                            placeholder="Title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Price</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-money"
                                                                    style="color: #e32467;"></i></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bookPrice"
                                                            placeholder="Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Genre</label>
                                                <div class="col-sm-12 my-1">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-book"
                                                                    style="color: #e32467;"></i></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" name="bookGenre"
                                                            placeholder="ex.Romance">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-left: 15px;">Book Category:</label>
                                                <div class="container">
                                                    <div class="form-check" style="margin-left: 20px;">
                                                        <input class="form-check-input" type="checkbox" value="Fiction"
                                                            name="bookCategory" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Fiction
                                                        </label>
                                                    </div>
                                                    <div class="form-check" style="margin-left: 20px;">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="Non-Fiction" name="bookCategory" id="defaultCheck2">
                                                        <label class="form-check-label" for="defaultCheck2">
                                                            Non-Fiction
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1" style="margin-left: 15px;">Book
                                                    Picture:</label>
                                                <div class="container" style="margin-left: 20px;">
                                                    <input type="file" class="form-control-file" name="bookPicture"
                                                        id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <button class="btn btn-primary" style="margin-left: 150px;"
                                                    name="publish">Publish</button>
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
                    <div class="container "
                        style="box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19); ">

                        <div class="container "><br>
                            <h4 style="color: black; ">Fiction</h4>
                            <div class="row ">
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="card " style="width: 10rem; ">
                                            <img src="../Admin/img/romance.png " class="card-img-top " alt="Seller "
                                                style="height: 140px; background-color: rgb(250, 175, 200); ">
                                            <div class="card-body text-center ">
                                                <button type="button " class="btn btn-primary romance "
                                                    data-toggle="modal" data-target="#Romance">Romance</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="card " style="width: 10rem; ">
                                                <img src="../Admin/img/adventure.png " class="card-img-top "
                                                    alt="Seller "
                                                    style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                <div class="card-body text-center ">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#Adventure">Adventure</button>

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
                                                    <img src="../Admin/img/drama.png " class="card-img-top "
                                                        alt="Seller "
                                                        style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                    <div class="card-body text-center ">
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#Drama">Drama</button>

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
                                                        <img src="../Admin/img/fantasy.png " class="card-img-top "
                                                            alt="Seller "
                                                            style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                        <div class="card-body text-center ">

                                                            <button type="button " class="btn btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#Fantasy">Fantasy</button>
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
                    <div class="container "
                        style="box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19); ">

                        <div class="container "><br>
                            <h4 style="color: black; ">Non-Fiction</h4>
                            <div class="row ">
                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="card " style="width: 10rem; ">
                                            <img src="../Admin/img/essay.png " class="card-img-top " alt="Seller "
                                                style="height: 140px; background-color: rgb(250, 175, 200); ">
                                            <div class="card-body text-center ">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#Essay">Essay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm ">
                                    <div class="col-sm ">
                                        <div class="col-sm ">
                                            <div class="card " style="width: 10rem; ">
                                                <img src="../Admin/img/poetry.png " class="card-img-top " alt="Seller "
                                                    style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                <div class="card-body text-center ">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#Poetry">Poetry</button>
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
                                                    <img src="../Admin/img/history.png " class="card-img-top "
                                                        alt="Seller "
                                                        style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                    <div class="card-body text-center ">
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#History">History</button>

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
                                                        <img src="../Admin/img/biography.png " class="card-img-top "
                                                            alt="Seller "
                                                            style="height: 140px; background-color: rgb(250, 175, 200); ">
                                                        <div class="card-body text-center ">

                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#Biography">Biography</button>
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
                <div class="modal fade " id="Romance" tabindex="-1 " aria-labelledby="RomanceText " aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="RomanceText " style="color: black; ">Romance</h5>
                                <button type="button " class="close " data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <form action="" method="POST" enctype="multipart/form-data">
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
                                            <?php
                                     
                                    $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Romance'";
                                    $query_run = mysqli_query($conn,$query);

                                    while($row = mysqli_fetch_array($query_run))
                                    {
                                        ?>

                                            <tr>
                                                <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                        class="product-img" height="100px" width="100px"></td>
                                                <td> <?php echo $row['booktitle']?></td>
                                                <td> <?php echo $row['sellername']?></td>
                                                <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                                <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                    <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                                </td>

                                            </tr>

                                            <?php
                                        
                                    }

                                    ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="modal-footer ">
                                <button type="button " class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Adventure Modal -->
                <div class="modal fade " id="Adventure" tabindex="-1 " aria-labelledby="AdventureText"
                    aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title" id="AdventureText" style="color: black; ">Adventure</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close ">
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Adventure'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Drama Modal -->
                <div class="modal fade" id="Drama" tabindex="-1" aria-labelledby="DramaText" aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DramaText" style="color: black; ">Drama</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close ">
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Drama'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fantasy Modal -->
                <div class="modal fade" id="Fantasy" tabindex="-1 " aria-labelledby="FantasyText" aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="FantasyText" style="color: black; ">Fantasy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close ">
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Fantasy'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Essay Modal -->
                <div class="modal fade" id="Essay" tabindex="-1 " aria-labelledby="EssayText" aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="EssayText" style="color: black; ">Essay</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close ">
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Essay'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Poetry Modal -->
                <div class="modal fade" id="Poetry" tabindex="-1 " aria-labelledby="PoetryText" aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="PoetryText " style="color: black; ">Poetry</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close ">
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Poetry'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- History Modal -->
                <div class="modal fade" id="History" tabindex="-1 " aria-labelledby="HistoryText" aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="HistoryText " style="color: black; ">History</h5>
                                <button type="button " class="close" data-dismiss="modal" aria-label="Close">
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='History'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning " data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Biography Modal -->
                <div class="modal fade" id="Biography" tabindex="-1 " aria-labelledby="BiographyText "
                    aria-hidden="true ">
                    <div class="modal-dialog modal-xl modal-dialog-centered ">
                        <div class="modal-content ">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="BoigraphyText" style="color: black; ">Biography</h5>
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
                                        <?php
                                     
                                     $query = "SELECT booktitle,sellername,bookprice,LTRIM(bookpicture) AS img FROM sellbooks WHERE LTRIM(bookgenre)='Biography'";
                                     $query_run = mysqli_query($conn,$query);
 
                                     while($row = mysqli_fetch_array($query_run))
                                     {
                                         ?>

                                        <tr>
                                            <td> <img src="../Products/<?php echo $row['img']; ?>" alt=""
                                                    class="product-img" height="100px" width="100px"></td>
                                            <td> <?php echo $row['booktitle']?></td>
                                            <td> <?php echo $row['sellername']?></td>
                                            <td> &#8369; <?php echo $row['bookprice']?>.00</td>
                                            <td> <?php echo '<button type="button" class="btn btn-primary">Edit</button>'?>
                                                <?php echo '<button type="button" class="btn btn-danger">Delete</button>'?>

                                            </td>

                                        </tr>

                                        <?php
                                         
                                     }
 
                                     ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
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
    <div class="modal fade " id="logoutModal " tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel "
        aria-hidden="true ">
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