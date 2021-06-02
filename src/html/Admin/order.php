<?php
session_start();
require_once ("../config.php");
require_once ("header.php");

?>


<head>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Order</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                    <h5 class="h3 mb-0 text-gray-800" style="margin-left: 21px;color: black;">Order</h5>
                </div>
                <!-- Table for Order -->
                <div class="container">
                    <table class="table text-center" style="box-shadow: 0 6px 10px 0 rgba(8, 8, 8, 0.2), 0 6px 20px 0 rgba(3, 0, 0, 0.19); text-align: center;">
                        <thead style="background-color: #b30930; color: white;">
                            <tr>
                                <th>Customer Name</th>
                                <th>Book</th>
                                <th>Book Title</th>
                                <th>Book Seller</th>
                                <th>Book Category</th>
                                <th>Total Amount</th>
                                <th>Payment</th>
                                <th>Date Purchased</th>
                                <th>Date Finished Transaction</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="color: black;font-size: 14px;">
                        
                        <?php

                        $sql = "SELECT users.firstname, users.lastname, orders.* FROM `orders`,`users` WHERE orders.userId = users.userId";
                        $result = $conn -> query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()):?>
                            <tr>
                                <th><?php echo $row['firstname']." ".$row['lastname'];?></th>
                                <td><img src="../Products/<?php echo $row['pic']?>" height="90rem"></td>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['seller']?></td>
                                <td><?php echo $row['category']?></td>
                                <td>₱ <?php echo $row['price']?>.00</td>
                                <td> <?php echo $row['payment']?></td>
                                <td><?php echo $row['datePurchased']?></td>
                                <td><?php echo $row['dateRecieved']?></td>
                                <td><?php echo $row['status']?></td>
                                <td>

                                
                                <?php 
                                
                                if ($row['status'] != "Canceled" && $row['status'] != "Completed"){
                                
                                    if ($row['status'] == "Pending"){
                                        echo "<a href='./model/order.php?status=".$row['status']."&orderID=".$row['orderID']."' title='Approve'>";
                                        echo '<i class="fas fa-circle" style="font-size: 20px; font-weight:bold; color: cyan;"></i>';
                                        echo '</a>';
                                        echo '&nbsp;&nbsp;';
                                        echo "<a href='./model/order.php?status=Cancel&orderID=".$row['orderID']."' title='Cancel'>";
                                        echo '<i class="fas fa-times-circle" style="font-size: 20px; font-weight:bold; color: rgb(255, 0, 21);" "></i>';
                                        echo '</a>';
                                    }

                                
                                
                                }
                                
                                else if($row['status'] == "Completed"){
                                    echo '<i class="fas fa-check-circle" style="font-size: 20px; color: chartreuse;" title="Completed"></i>';
                                    echo '&nbsp;&nbsp;';
                                    echo "<a href='./model/order.php?status=Delete&orderID=".$row['orderID']."' title='Remove'>";
                                    echo '<i class="fas fa-trash" style="font-size: 20px; font-weight:bold; color: rgb(255, 0, 21);" ></i>';
                                    echo '</a>';
                                }
                                
                                else{
                                    echo '<i class="fas fa-times-circle" style="font-size: 20px; font-weight:bold; color: orange;" title="Cancelled"></i>';
                                    echo '&nbsp;&nbsp;';
                                    echo "<a href='./model/order.php?status=Delete&orderID=".$row['orderID']."' title='Remove'>";
                                    echo '<i class="fas fa-trash" style="font-size: 20px; font-weight:bold; color: rgb(255, 0, 21);" ></i>';
                                    echo '</a>';
                                }
                                
                                ?>

                                
                                </td>
                            </tr>
                            <?php endwhile; 
                        }?>
                           
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
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
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 

</body>

</html>