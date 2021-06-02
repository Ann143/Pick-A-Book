<?php
    require_once('../../config.php');

    $orderId = $_GET['orderID'];
    $status = $_GET['status'];

    
    if($status === "Pending"){
        $sql = 'UPDATE orders SET status = "Completed", dateRecieved = now() WHERE orderId = '.$orderId;
        $result = $conn->query($sql);
    }
    elseif ($status == "Cancel") {
        $sql = 'UPDATE orders SET status = "Canceled",dateRecieved = now() WHERE orderId = '.$orderId; 
        $result = $conn->query($sql);
    }elseif ($status == "Delete") {
        $sql = 'DELETE FROM orders WHERE orderId = '.$orderId; 
        $result = $conn->query($sql);
    }
       
      
    header ("Location:../order.php");
    ?>

