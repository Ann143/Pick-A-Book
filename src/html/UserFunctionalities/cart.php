<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../../jquery/cart.js"></script>

    <script src="../../jquery/navigators.js"></script>
    <link rel="stylesheet" href="../../css/navigators.css">

    <title>My Cart</title>
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
            <div class="conatiner float-right w-25" style="background-color: tomato;">

            </div>

            <div class="container" style="color: white;">
                <div class="row">
                    <div class="w-75">
                        <table class="table border border-dark" style="background-color: rgb(233, 231, 229);box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19);">
                            <h4 style="color: black;text-align: center;">YOUR CART</h4>
                            <thead>
                                <tr class="text-center" style="background-color: rgb(219, 43, 102);">
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="poduct-list">
                                <tr class="text-center">
                                    <td><img src="../img/bio2.jpg" alt="" height="130px"></td>
                                    <td class="mt-30">Romance</td>
                                    <td>Php <span class="price-tag">200.89</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><img src="../img/bio4.jpg" alt="" height="130px"></td>
                                    <td>Thriller</td>
                                    <td>Php <span class="price-tag">100.25</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><img src="../img/bio2.jpg" alt="" height="130px"></td>
                                    <td class="mt-30">Romance</td>
                                    <td>Php <span class="price-tag">200.60</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td><img src="../img/bio4.jpg" alt="" height="130px"></td>
                                    <td>Thriller</td>
                                    <td>Php <span class="price-tag">700.12</span></td>
                                    <td class="action">
                                        <i class="fa fa-trash-o" style="cursor: pointer !important; font-size:25px;color:red;"></i>&nbsp;&nbsp;
                                        <i class="fa fa-edit" style="cursor: pointer !important;font-size:25px;color:rgb(247, 149, 22);"></i>
                                    </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <div class="container" style="background-color: rgb(20, 20, 20);box-shadow: 0 6px 10px 0 rgba(128, 2, 50, 0.2), 0 6px 20px 0 rgba(128, 2, 50, 0.19);">
                            <h5>SUMMARY</h5>
                            <hr class="new1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <h6>Total:</h6>
                                    </div>
                                    <div class="col-sm">
                                        <label for="" class="total-payment">Php 0.00</label>
                                    </div>
                                </div>
                            </div>
                            <hr class="new1">


                            <h6 class="text-center">Payment</h6>
                            <hr class="new2">
                            <p class="text-center">Accepted Cards</p><br>

                            <span>Name on Cards</span><br>
                            <input type="text"><br>

                            <span>Credit Card Number</span>
                            <input type="text"><br>

                            <span>Exp Month</span>
                            <input type="text"><br><br>

                            <span>Exp Year</span>
                            <input type="text" class="w-25">&nbsp;

                            <span>CVV</span>
                            <input type="text" class="w-25">
                            <br><br>
                            <button type="button" class="btn btn-primary" style="background-color: rgb(221, 33, 111); width: 100%;">Checkout</button><br><br>
                            <p class="text-center">OR</p>
                            <button type="button" class="btn btn-primary" style="background-color: rgb(233, 225, 228); width: 100%;color: black;">Checkout with GCash</button><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>