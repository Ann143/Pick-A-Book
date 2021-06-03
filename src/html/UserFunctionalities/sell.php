<?php
require_once ("../config.php");

require_once ("./header.php");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sell</title>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>t6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<style>
.file {
    visibility: hidden;
    position: absolute;
}
</style>

<body>
    <?php
    require_once("header.php");
    ?>

    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->

    <div id="main" style="margin-top: 7%;margin-left: 90px;">
        <?php
    
    if(isset($_POST['publish']))
    {
        $name = $_POST['sellerName'];
        $bookTitle =$_POST['bookTitle'];
        $bookPrice =$_POST['bookPrice'];
        $bookGenre =$_POST['bookGenre'];
        $bookCategory =$_POST['bookCategory'];
        $bookPicture=$_FILES["bookPicture"]["name"];
    
        // $sql =("SELECT * FROM `sellbooks` WHERE bookpicture=' $bookPicture'");
        // $query_run = mysqli_query($conn,$sql);
        // mysqli_num_rows($query_run) > 0

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
        <div class="p-3 mt-5">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-5 border p-4" style="margin-left: 70px;">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label style="margin-left: 15px;">Seller</label>
                            <div class="col-sm-12 my-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user" style="color: #e32467;"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="sellerName"
                                        value="<?php echo $row['firstname']?> <?php echo $row['lastname']?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 15px;">Book Title</label>
                            <div class="col-sm-12 my-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-book" style="color: #e32467;"></i>
                                        </div>
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
                                        <div class="input-group-text"><i class="fa fa-money"
                                                style="color: #e32467;"></i></i>
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
                                        <div class="input-group-text"><i class="fa fa-book"
                                                style="color: #e32467;"></i></i>
                                        </div>
                                    </div>
                                    <!-- <input type="text" class="form-control" name="bookGenre" placeholder="ex.Romance"> -->
                                    <select class="form-control" name="bookGenre" id="exampleFormControlSelect1">
                                        <option selected>Choose Category</option>
                                        <option>Romance</option>
                                        <option>Adventure</option>
                                        <option>Drama</option>
                                        <option>Fantasy</option>
                                        <option>Essay</option>
                                        <option>Poetry</option>
                                        <option>History</option>
                                        <option>Biography</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 15px;">Book Category:</label>
                            <div class="container">
                                <div class="form-check" style="margin-left: 20px;">
                                    <input class="form-check-input" type="checkbox" value="Fiction" name="bookCategory"
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Fiction
                                    </label>
                                </div>
                                <div class="form-check" style="margin-left: 20px;">
                                    <input class="form-check-input" type="checkbox" value="Non-Fiction"
                                        name="bookCategory" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Non-Fiction
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1" style="margin-left: 15px;">Book Picture:</label>
                            <div class="container" style="margin-left: 20px;">
                                <input type="file" class="form-control-file" name="bookPicture" id="bookPicture">
                            </div>
                        </div>
                        <button class="btn btn-primary" style="margin-left: 150px;" name="publish">Publish</button>
                        <button class="btn btn-danger" name="cancel">Cancel</button>

                    </form>
                </div>
                <div class="col-sm-4 border" style="height: 430px;margin-right: 70px;">
                    <div class="pt-3 pb-3">
                        <img width="100%" height="400px" id="preview"
                            src="https://www.trendsetter.com/pub/media/catalog/product/placeholder/default/no_image_placeholder.jpg">
                    </div>
                </div>
            </div>
        </div>
        <?php }}?>
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