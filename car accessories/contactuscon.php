<?php
    include_once('./js/dbconnection.php');
    session_start();

    $name = $_POST['name'];
    $product = $_POST['product'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rows = 0;
    if($name && $product && $email && $message )
    {
        $sql = "INSERT INTO `contactus`(`name`, `product`, `email`, `message`) VALUES ('".$name."','".$product."','".$email."','".$message."')";
        // print_r($sql);
        $conn->query($sql);
    }
    header("Location:contactus.php");
?>