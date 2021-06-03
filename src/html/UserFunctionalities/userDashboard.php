

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/books.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../jquery/books.js"></script>

    
</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
<?php

    require_once("../config.php");
    require_once("header.php");
    $id=$_SESSION["id"];

    ?>
    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->

    <div id="main">
        <div style="width: 95%; margin-left: 8%; margin-top: 5%;">
            <div class="search-product">
<<<<<<< HEAD
                <form class="example" action="search.php" method="GET">
                    <input type="text" placeholder="Search.." name="search" class="search-item">
=======
                <form class="example" action="" method="GET">
                    <input type="text" placeholder="Search.." name="search" >
>>>>>>> 9e7240629af7afc903faddbfbc55b0d62ead4b97
                    <button type="submit" name="submit"><i class="fa fa-search"></i></button>
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

                    </ul><br>

                    <p>Choose your favorite books here! Be knowledgable and learn something new through reading our books.</p>
                </section>

                <section class="main">
                    <?php

                    $query = "SELECT sellerID, sellername,booktitle,bookgenre,bookprice,LTRIM(bookpicture) AS img FROM sellbooks";
                    $query_run = mysqli_query($conn,$query);
                    $check_product = mysqli_num_rows($query_run) > 0;

                    if($check_product)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                            <div class="product" >
                                <form class="" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['sellerID'];?>">
                                    <img src="../Products/<?php echo $row['img'];?>" alt="" class="product-img" height="180px" >
                                    <br>
                                    <input type="hidden" name="booktitle" value="<?php echo $row['booktitle'];?>">
                                    <input type="hidden" name="bookGenre" value="<?php echo $row['bookgenre'];?>">
                                    <input type="hidden" name="bookPrice" value="<?php echo $row['bookprice'];?>">
                                    <span class="product-name color"> <?php echo $row['booktitle']; ?>
                                    </span>
                                    <br>
                                    <span class="product-genre color"> <?php echo $row['bookgenre']; ?>
                                    <br>
                                    <span class="product-price color">&#8369;<?php echo $row['bookprice']; ?>.00</span>
                                    <button type="submit" class="btn" name="addToCart"> <i class="fas fa-shopping-cart" style="color:#de094c"></i></button>
                                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<?php
if(isset($_POST['addToCart'])){
    $bookId=$_POST['id'];
    
    $id=$_SESSION["id"];
    $query="insert into cart(userId, sellerID)
    values('".$id."','".$bookId."')";
    if($conn->query($query)===TRUE){
        ?>
        <!--fire a successful message using sweet alert -->
       <script>
       swal({
         position: 'top-end',
         icon: 'success',
         title: 'Book added to cart!',
         showConfirmButton: false,
         timer: 1800
       
     })
     setTimeout(() => {
       location.reload()
     }, 2000);
     </script>
       <?php
 
    }
}

?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
$(document).ready(function(){
    var $search = $(".search-item").on('input',function(){
        var matcher = new RegExp($(this).val(), 'gi');
        $('.product').show().not(function(){
            return matcher.test($(this).find('.product-name, .product-genre').text())
        }).hide();
    })
})
</script> 

</body>

</html>