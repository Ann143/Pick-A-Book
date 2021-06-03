<?php
require_once('../../config.php');

$sellername = $_GET['sellername'];
$status = $_GET['status'];
if ($status == "Delete") {
    $sql = 'DELETE FROM sellbooks WHERE sellername = "'.$sellername.'"'; 
    $result = $conn->query($sql);
}

header ("Location:../Seller.php");
?>