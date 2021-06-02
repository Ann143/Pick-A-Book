<?php
    require_once('../../config.php');

    $sellerID=$_GET['sellerID'];

    $query= "DELETE FROM `sellbooks` WHERE `sellerID` =".$sellerID;
                    
    $result = $conn->query($query);

    header ("Location:../product.php");
?>