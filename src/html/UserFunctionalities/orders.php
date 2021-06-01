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
?>

    <div id="main" class="container" style="margin-top: 8%;">
        <div>
            <h5>Keep track with your orders!</h5>

            <h4 class="text-center"> My Orders</h4>
        </div>
        <table class="table table-hover table-stripped">
            <thead style="background-color: black;color: white;text-align: center   ;">
                <tr>
                    <th>Book</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Seller</th>
                    <th>Price</th>
                    <th>Date Purchased</th>
                    <th>Date Received</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td><img src="../../img/1.jpg" alt="" height="90rem"> </td>
                    <td><b>SandMan</b> </td>
                    <td>Action: Pirated</td>
                    <td>Mery-an Telez</td>
                    <td>Php 200.00</td>
                    <td>May 06, 2021</td>
                    <td>May 07, 2021</td>
                    <td>Completed</td>
                    <td>
                        <i class="fa fa-close" style="font-size:25px;color:blue"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../img/3.jpg" alt="" height="90rem"> </td>
                    <td><b>Gideon</b> </td>
                    <td>Action: Pirated</td>
                    <td>Mery-an Telez</td>
                    <td>Php 200.00</td>
                    <td>May 06, 2021</td>
                    <td></td>
                    <td> Cancelled</td>
                    <td>
                        <i class="fa fa-close" style="font-size:25px;color:blue"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                    </td>
                </tr>
                <tr>
                    <td><img src="../../img/2.jpg" alt="" height="90rem"> </td>
                    <td><b>The Stand</b> </td>
                    <td>Romance</td>
                    <td>Mery-an Telez</td>
                    <td>Php 200.00</td>
                    <td>May 06, 2021</td>
                    <td></td>
                    <td> Pending</td>
                    <td>
                        <i class="fa fa-close" style="font-size:25px;color:blue"></i>&nbsp;&nbsp;
                        <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>