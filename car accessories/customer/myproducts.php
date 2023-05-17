<?php
if(!isset($_SESSION)){
    session_start();
}
include('./customerinclude/header.php');
include('../js/dbconnection.php');


if(isset($_SESSION['email'])){
    $cusLogemail=$_SESSION['email'];
}else{
    echo "<script> location.herf='./index.php'; </script>";
}
?>
