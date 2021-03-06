<?php
        require_once("../config.php");

      session_start();
      $name = $_SESSION["username"];

    //   $name = $_SESSION["username"];

        $id = $_SESSION["id"];
        $username = $_SESSION["username"];
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Pick A Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/books.css">
    <script src="../../jquery/books.js"></script>

    <script src="../../jquery/navigators.js"></script>
    <link rel="stylesheet" href="../../css/navigators.css">
</head>

<body>
    <div class="top-nav d-flex align-items-center">
        <div class="top-nav-logo ">
            <h3 style="text-align: center;margin-top: 6%;font-family: Georgia, 'Times New Roman', Times, serif;">
                Pick-A-Book</h3>
        </div>
        <div class="side-nav-btn cursor-pointer">
            <img src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-256.png" alt=Menu>
        </div>

        <div class="top-nav-drop-downs d-flex">
          


            <?php
      
           $query = "SELECT count(cartID) as countCart from cart where userId='".$id."'";
            $row = mysqli_fetch_assoc(mysqli_query($conn,$query));
       
         ?>
            <div onclick="window.location = './cart.php'" class="drop-down cart  cursor-pointer">
                <span class="badge"><img src="https://cdn1.iconfinder.com/data/icons/feather-2/24/shopping-cart-256.png"
                        alt="Cart"><?php echo $row['countCart'] ?></span>
            </div>
        </div>

        
        <div class="top-nav-drop-down-privacy d-flex justify-content-end">
            <div class="drop-down my-account cursor-pointer">
                <?php
                $sql = "SELECT `userId`, `firstname`, `lastname`, `birthdate`, `address`, `username`, `email`, `password`, `created_at`, `userPic` FROM `users` WHERE `username` = '".$username."'";
                $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
            ?>
                <img class="img-profile rounded-circle" src="../adminPic/<?php echo $row['userPic']; ?>">

                <div class="drop-nav-profile container">
                    <a href="./newAccount.php"
                        style="color: black;text-decoration: none;"><?php echo $_SESSION["username"]?></a>
                    <br>
                    <a href="../Public/logout.php" style="color: black;text-decoration: none;">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="side-nav">
        <div onclick="window.location ='./userDashboard.php'"
            class="slide-show-btn d-flex align-items-center cursor-pointer bg-green unexpand-side-nav">
            <div class="slide-show-icon">
                <i class="fa fa-dashboard" style="font-size:24px;margin-top:20px;margin-left:16px;color:#f00c45"></i>
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Dashboard</span>
        </div>
        <div onclick="window.location = './myLibrary.php'"
            class="slide-show-btn d-flex align-items-center cursor-pointer bg-red">
            <div class="slide-show-icon">
                <i class="fa fa-book" style="font-size:24px;margin-top:20px;margin-left:16px;color:blue"></i>

            </div>
            <span id="toggle-span" class="hide-display align-items-center">My Library</span>
        </div>


        <div onclick="window.location = './sell.php'"
            class="slide-show-btn d-flex align-items-center cursor-pointer bg-green unexpand-side-nav">
            <div class="slide-show-icon">
                <i class="fa fa-dollar" style="font-size:24px;margin-top:20px;margin-left:16px;color:violet"></i>
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Sell</span>
        </div>
        <div onclick="window.location = './orders.php'"
            class="slide-show-btn d-flex align-items-center cursor-pointer bg-red">
            <div class="slide-show-icon">
                <i class="fa fa-first-order" style="font-size:24px;margin-top:20px;margin-left:16px;color:#b9d100"></i>
            </div>
            <span id="toggle-span" class="hide-display align-items-center">Orders</span>
        </div>
    </div>

</html>
</body>