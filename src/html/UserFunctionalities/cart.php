<!DOCTYPE html>
<html lang="en">
<?php

require_once ("../config.php"); 


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../../jquery/cart.js"></script>

    <script src="../../jquery/navigators.js"></script>
    <link rel="stylesheet" href="../../css/navigators.css">

    <title>My Cart</title>
    <style>
    hr.new4 {
        border: 1px solid #f21164;
    }

    hr.new3 {
        border-top: 1px dotted #f21164;
        width: 60%;
    }
    </style>
</head>

<body>
    <?php
    require_once("header.php");
    ?>

    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->
    <div id="main">
        <br><br>
        <br>
        <div class="container">
            <div class="container w-75 float-left">

            </div><br>
            <div class="container float-right w-25" style="background-color: tomato;">

            </div>

            <div class="container" style="color: white;">
                <div class="row">
                    <div class="w-75">
                        <table class="table border border-dark" id="table1"
                            style="background-color: rgb(233, 231, 229);box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
                            <h4 style="color: black;text-align: center;">YOUR CART</h4>
                            <thead>
                                <tr class="text-center" style="background-color: rgb(219, 43, 102);">
                                    <th>Book</th>
                                    <th>Title</th>
                                    <th>Seller Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="poduct-list">
                                <?php

                                $query ="select cart.cartID, cart.userId, sellbooks.sellerID, ltrim(sellbooks.bookpicture) as pic, sellbooks.sellername, sellbooks.booktitle, sellbooks.bookcategory,sellbooks.bookprice FROM cart inner join sellbooks on sellbooks.sellerID=cart.sellerID where userId='".$id."'";
                                $query_run = mysqli_query($conn,$query);
                                $cart = mysqli_num_rows($query_run) > 0;

                                if($cart)
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                ?>
                                <tr class="text-center" id="<?php echo $row['sellerID']?>">
                                    <td style="width:20%" id="<?php echo $row['pic']?>"><img
                                            src="../Products/<?php echo $row['pic']?>" alt="" height="130px"></td>
                                    <td class="mt-30"><?php echo $row['booktitle']?></td>
                                    <td class="mt-30"><?php echo $row['sellername']?></td>
                                    <td class="mt-30"><?php echo $row['bookcategory']?></td>
                                    <td>Php <span class="price-tag"><?php echo $row['bookprice']?></span></td>
                                    <td class="action">
                                        <form action="" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row['cartID']?>">
                                            <input type="hidden" name="userId" value="<?php echo $row['userId']?>">
                                            <button type="submit" name="delete" class="btn btn-warning">
                                                <i class="fa fa-trash-o"
                                                    style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="userDashboard.php"> <button class="btn btn-warning">Continue Shopping</button></a>
                    </div>

                    <div class="col">
                        <div class="container"
                            style="background-color: rgb(20, 20, 20);box-shadow: 0 6px 10px 0 rgba(128, 2, 50, 0.2), 0 6px 20px 0 rgba(128, 2, 50, 0.19);">
                            <form method="POST">
                                <h5>SUMMARY</h5>
                                <hr class="new4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <h6>Total:</h6>
                                        </div>
                                        <div class="col-sm">
                                            <label for="" class="total-payment"></label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="new4">
                                <h6 class="">Payment Method</h6>
                                <hr class="bg-info">
                                <p style="margin-left:10px">Accepted Cards</p>
                                <div class="container-fluid">
                                    <div class="form-check" style="margin-left:15px">
                                        <input class="form-check-input" type="checkbox" value="Credit Card"
                                            name="payment" id="creditCard">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Credit Card
                                        </label>
                                    </div>
                                    <div class="form-check" style="margin-left:15px">
                                        <input class="form-check-input" type="checkbox" value="Debit Card"
                                            name="payment" id="debitCard">
                                        <label class="form-check-label" for="defaultCheck2">
                                            Debit Card
                                        </label>
                                    </div>

                                </div>
                                <hr class="new4">
                                <span>Credit Card Number</span>

                                <input type="hidden" name="bookId" id="bookId" value="">
                                <input type="hidden" name="title" id="title" value="">
                                <input type="hidden" name="photo" id="photo" value="">
                                <input type="hidden" name="seller" id="seller" value="">
                                <input type="hidden" name="category" id="category" value="">
                                <input type="hidden" name="total" id="totalBill" value="">
                                <input type="hidden" name="price" id="price" value="">
                                <input type="number" name="cardNumber" value="">
                                <br><br>
                                <button type="submit" class="btn btn-primary" name="checkOut"
                                    style="background-color: rgb(221, 33, 111); width: 100%;">Checkout</button>
                            </form>
                            <br><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous"></script>

        <script>
        $(document).ready(function() {
            var table = document.getElementById("table1");
            var r = 1; //start counting rows in table
            var photo = [];
            var price = [];
            var seller = [];
            var category = [];
            var title = [];
            var bookId = [];
            var payment = [];

            while (row = table.rows[r++]) {
                $id = row.id
                bookId.push($id)
                // console.log($id)
                $photo = row.cells[0].id;
                $title = row.cells[1].innerHTML;
                $seller = row.cells[2].innerHTML;
                $category = row.cells[3].innerHTML;
                $price = row.cells[4].innerText;
                $price = $price.substring(3);

                photo.push($photo);
                price.push($price);
                seller.push($seller);
                category.push($category);
                title.push($title);




                //start counting columns in row

            }
            // alert(bookId)
            document.getElementById('bookId').value = bookId;
            document.getElementById('title').value = title;
            document.getElementById('photo').value = photo;
            document.getElementById('seller').value = seller;
            document.getElementById('category').value = category;
            document.getElementById('price').value = price;


        })
        </script>

        <?php

    if (isset($_POST['delete'])){
        
        $cartId=$_POST['id'];
        $userId=$_POST['userId'];
        $query="delete from cart where cartID='".$cartId."' and userId='".$userId."'";

        if($conn->query($query)===TRUE){
            ?>

        <!--fire a successful message using sweet alert -->
        <script>
        swal({
            position: 'top-end',
            icon: 'success',
            title: 'Book deleted from cart!',
            button: true,
            timer: 1800

        })
        setTimeout(() => {
            location.reload()
        }, 2000);
        </script>
        <?php
            
        }
    }

   
    if (isset($_POST['checkOut'])){
        echo $_POST['payment'];
        $cardNumber=strval($_POST['cardNumber']);
        if(strlen($cardNumber)!==16){
            ?>

        <!--fire a successful message using sweet alert -->
        <script>
        swal({
            position: 'top-end',
            icon: 'warning',
            title: 'Card number must be 16 digits!',
            button: true,
            timer: 1800

        })
        setTimeout(() => {
            location.reload()
        }, 2000);
        </script>
        <?php
        }else{

      
        $done=false;
        $id=$_SESSION['id'];
        $bookId=$_POST['bookId'];
        $title=$_POST['title'];
        $seller=$_POST['seller'];
        $category=$_POST['category'];
        $photo=$_POST['photo'];
        $price=$_POST['price'];
        $payment=$_POST['payment'];

        if($id!="" && $bookId !="" && $title !="" && $seller !="" && $category !="" && $photo !="" && $price !="" && $payment !=""){
        $bookId=explode(",", $bookId);
        $title=explode(",", $title);
        $seller=explode(",", $seller);
        $category=explode(",", $category);
        $photo=explode(",", $photo);
        $price=explode(",", $price);
        $payment=explode(",", $payment);
        // $book1=$books[0];
        
        $total=$_POST['total'];
        date_default_timezone_set('Asia/Manila');
        $dateCreated=date("Y-m-d h:i:s");
       // INSERT INTO `orders` (`orderID`, `Books`, `datePurchased`, `dateRecieved`, `status`, `userId`, `cardNumber`) VALUES (NULL, '66', current_timestamp(), NULL, 'Pending', '14', '12345');
        // $quer="INSERT INTO `orders` (`orderID`, `Books`, `datePurchased`, `dateRecieved`, `status`, `userId`, `cardNumber`) VALUES ( NULL, '2', '".$dateCreated."',NULL, 'Pending', '".$id."','".$cardNumber."')";
        
        $i= 0;
          while($i<count($title)){
            $bookID=$bookId[$i];
            $bookTitle=$title[$i];
            $bookSeller=$seller[$i];
            $bookCategory=$category[$i];
            $bookPhoto=$photo[$i];
            $bookPrice=$price[$i];
            $bookPayment=$payment[$i];
            // echo "<script>alert('$books[$i]+$cardNumber+$id+$dateCreated+var_dump($book)');</script>";
           
            $raven="insert into orders(pic, title, category, seller, price, payment, datePurchased, status, dateRecieved, userId, cardNumber)
            values('".$bookPhoto."', '".$bookTitle."','".$bookCategory."','".$bookSeller."','".$bookPrice."','".$bookPayment."','".$dateCreated."', 'Pending', NULL, '".$id."', '".$cardNumber."')";
            if($conn->query($raven)){
                $done=true;
               
            }else{
                $done=false;
            }
           
           $i++;

        }
        // $raven="insert into orders(Books, datePurchased, status, dateRecieved, userId, cardNumber)
        // values('".$book."','".$dateCreated."', 'Pending', NULL, '".$id."', '".$cardNumber."')";
        
        if($done===TRUE){
            $query="delete from cart where userId= '".$id."'";  
            $conn->query($query);
            ?>

        <!--fire a successful message using sweet alert -->
        <script>
        swal({
            position: 'top-end',
            icon: 'success',
            title: 'Book checked out from cart!',
            button: true,
            timer: 1800

        })
        setTimeout(() => {
            location.reload()
        }, 2000);
        </script>
        <?php
            
        }else{
            ?>

        <!--fire a successful message using sweet alert -->
        <script>
        swal({
            position: 'top-end',
            icon: 'warning',
            title: 'Book already added to your cart!',
            button: true,
            timer: 1800

        })
        setTimeout(() => {
            location.reload()
        }, 2000);
        </script>
        <?php
        
        }
        }else{
            ?>

        <!--fire a successful message using sweet alert -->
        <script>
        swal({
            position: 'top-end',
            icon: 'warning',
            title: 'No item in cart!',
            button: true,
            timer: 1800

        })
        setTimeout(() => {
            location.reload()
        }, 2000);
        </script>
        <?php
        }
    }
    }
?>

        <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        </script>
</body>

</html>