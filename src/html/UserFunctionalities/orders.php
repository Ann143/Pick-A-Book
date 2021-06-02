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

</head>

<body>

    <?php
    require_once("header.php");
    session_start();
    $id=$_SESSION['id'];
    ?>

    <div id="main" class="container" style="margin-top: 8%;">
        <div>
            <h5>Keep track with your orders!</h5>
            <h4 class="text-center">My Orders</h4>
        </div>
        <table class="table table-hover table-stripped">
            <thead style="background-color: black;color: white;text-align: center   ;">
                <tr>
                    <th>Book</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Seller</th>
                    <th>Price</th>
                    <th>Payment Method</th>
                    <th>Date Purchased</th>
                    <th>Date Received</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php

                $query ="select * from orders WHERE userId = '$id' ";
                $query_run = mysqli_query($conn,$query);
                $cart = mysqli_num_rows($query_run) > 0;

                if($cart)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                ?>
                <tr>
                    <td><img src="../Products/<?php echo $row['pic']?>" alt="" height="90rem"> </td>
                    <td><b><?php echo $row['title']?></b> </td>
                    <td><?php echo $row['category']?></td>
                    <td><?php echo $row['seller']?></td>
                    <td><?php echo "Php ".$row['price']?></td>
                    <td><?php echo $row['payment']?></td>
                    <td><?php echo $row['datePurchased']?></td>
                    <td><?php echo $row['dateRecieved']?></td>
                    <td><?php echo $row['status']?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="orderId" value="<?php echo $row['orderID'] ?>">
                            <button class="btn" type="submit" name="cancelOrder"> <i class="fa fa-close"
                                    style="font-size:25px;color:blue"></i></button>
                            <button class="btn" type="submit" name="deleteOrder"><i class="fa fa-trash-o"
                                    style="font-size:25px;color:red"></i></button>
                        </form>
                    </td>
                </tr>
                <?php } }
                 if (mysqli_num_rows($query_run) == 0){?>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
                    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
                    crossorigin="anonymous"></script>
                <script>
                swal({
                    position: 'top-end',
                    icon: 'error',
                    title: 'No Orders Yet!',
                    button: true,
                    timer: 1800

                })
                </script>
                <?php }?>
            </tbody>

        </table>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>

    <?php
    if (isset($_POST['deleteOrder'])){
        
        $orderId=$_POST['orderId'];
        $userId=$_SESSION['id'];
        $query="delete from orders where orderID='".$orderId."' and userId='".$userId."'";

        if($conn->query($query)===TRUE){
            ?>

    <!--fire a successful message using sweet alert -->
    <script>
    swal({
        position: 'top-end',
        icon: 'success',
        title: 'Order deleted successfully!',
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
    if (isset($_POST['cancelOrder'])){
        
        $orderId=$_POST['orderId'];
        $userId=$_SESSION['id'];
        $query="update orders set status='Cancelled' where orderID='".$orderId."' and userId='".$userId."'";

        if($conn->query($query)===TRUE){
            ?>

    <!--fire a successful message using sweet alert -->
    <script>
    swal({
        position: 'top-end',
        icon: 'success',
        title: 'Order cancelled successfully!',
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
?>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>