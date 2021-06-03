<?php
require_once ("../config.php");
require_once ("./header.php");

?>

<head>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="h3 mb-0 text-gray-800">Dashboard</h5>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php 
            $seller = 0;             
            $query = "SELECT DISTINCT sellername from sellbooks";
            $query_run = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($query_run)) {
                $seller += 1;
            }
        ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Sellers</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $seller?>
                                (Person(s))</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $totalEarnings = 0;                         
            $query = "SELECT `price` from orders WHERE `status` = 'Completed'";
            $query_run = mysqli_query($conn,$query);
            while($row = mysqli_fetch_array($query_run))
                $totalEarnings += $row['price'];
            {
                         
        ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Earnings</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Php <?php echo $totalEarnings?>.00</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <?php                                    
            $query = "SELECT count(sellerID) as totalBooks from sellbooks";
            $query_run = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($query_run)
        ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Books
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php echo $row['totalBooks']?> (pcs)</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"  style="background-color:#f0184a;color: black;">
                    <h6 class="m-0 font-weight-bold text-light">Seller's Information</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0"
                            style="color: black;">
                            <thead style="background-color:#fc426d;color: black;">
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity of Books</th>
                                    <th>Total Amount Sold</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $sql = 'SELECT sellbooks.sellername, COUNT(orders.seller) AS qtyOfBooks, SUM(orders.price) AS totalAmountSold 
                                    FROM orders, sellbooks 
                                    WHERE sellbooks.sellername = orders.seller AND orders.status = "Completed" 
                                    GROUP BY sellbooks.sellername 
                                    ORDER BY SUM(orders.price) DESC';
                                    $result = $conn -> query($sql);
                            if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()):
                                ?>
                                <tr>
                                        <td><?php echo $row['sellername']?></td>
                                        <td><?php echo $row['qtyOfBooks']?></td>
                                        <td><?php echo $row['totalAmountSold']?></td>
                                </tr>
                                <?php
                                endwhile;
                            }
                                ?>
                            </tbody>
                            <?php //}?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#f0184a;color: black;">
                    <h6 class="m-0 font-weight-bold text-light">Orders</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="color:black">
                    <?php
                        $query = "SELECT DISTINCT users.firstname as userFname, users.lastname as userLname FROM users INNER JOIN orders ON users.userId = orders.userId";
                        $query_run = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($query_run)){
                    ?>
                    <ul>
                        <li><?php echo $row['userFname']?> <?php echo $row['userLname']?></li>
                    </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white" style="margin-top:60px">
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

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>