<?php
session_start();

require_once ("../config.php");


if(isset($_POST['publish']))
{
    $name = $_POST['sellerName'];
    $bookTitle =$_POST['bookTitle'];
    $bookPrice =$_POST['bookPrice'];
    $bookGenre =$_POST['bookGenre'];
    $bookCategory =$_POST['bookCategory'];
    $bookPicture=$_FILES["bookPicture"]["name"];

    $sql = mysqli_query($conn,"SELECT * FROM `sellbooks` WHERE bookpicture='$bookPicture'");

    if(mysqli_num_rows($sql) > 0)
    {
      
        // echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="width:30%;margin-left:380px;text-align:center">
        //                        <strong>Book Already Exists!</strong> Try Again.
        //                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                          <span aria-hidden="true">&times;</span>
        //                         </button>
        //                        </div>';
        echo '<script type="text/javascript">';
        echo '$(document).ready(function() {';
        echo '$("#alertDuplicate").modal("show");';
        echo '});';
        echo '</script>';
    }else{

        $query = "INSERT INTO sellBooks (`sellername`, `booktitle`, `bookprice`, `bookgenre`,`bookcategory`, `bookpicture`) VALUES('$name','$bookTitle','  $bookPrice',' $bookGenre',' $bookCategory',' $bookPicture')";
            $query_run = mysqli_query($conn,$query);

            if( $query_run)
            {
                // move_upload_file($_FILES['bookPicture']['tmp_name'], "upload/".$_FILES['file']["name"]);
                $_SESSION['success'] = "You publish successfully!";
            } else{
                $_SESSION['success'] = "You didn't publish your book!";
            }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sell</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>t6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="../../jquery/navigators.js"></script>
    <link rel="stylesheet" href="../../css/navigators.css">

</head>
<style>
    .file {
        visibility: hidden;
        position: absolute;
    }
</style>

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
    <div id="main" style="margin-top: 7%;margin-left: 90px;">
        <div class="p-3 mt-5">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-5 border p-4" style="margin-left: 70px;">
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
                        <button class="btn btn-primary" style="margin-left: 150px;" name="publish">Publish</button>
                        <button class="btn btn-danger" name="cancel">Cancel</button>

                    </form>
                </div>
                <div class="col-sm-4 border" style="height: 430px;margin-right: 70px;">
                    <div class="pt-3 pb-3">
                        <img width="100%" height="400px" id="preview" src="https://www.trendsetter.com/pub/media/catalog/product/placeholder/default/no_image_placeholder.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="alertDuplicate">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Erro</h4>
                </div>
                <div class="modal-body">
                    <p>Essa função já existe!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


        <script>
            $(document).on("click", ".browse", function() {
                var file = $(this).parents().find(".file");
                file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
        </script>
    </div>
</body>

</html>