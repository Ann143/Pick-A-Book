<?php
    // //this is for the connection
    $conn = new mysqli("remotemysql.com:3306","zEm8UvREZ1", "fe4gw1r5dA","zEm8UvREZ1");

    //check the connection
    if($conn->connect_error)
    {
        die("Connection Failed!".$conn->connect_error);
    }


?>