<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="/CAR%20ACCESSORIES/css/bootstrap.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet"href="/CAR%20ACCESSORIES/css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<!--custom css-->
<link rel="stylesheet" href="/CAR%20ACCESSORIES/css/style.css">
    <title>CAR ACCESSORIES</title>
  </head>
  <body>
    <!--start navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">JV CAR ACCESSORIES</a>
    <span class="navbar-text" >comfortable journey</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5" >
        <li class="nav-item"><a href="/CAR%20ACCESSORIES/index.php" class="nav-link">Home</a></li>
        <?php 
        if(isset($_SESSION) && $_SESSION)
        { ?>
        <li class="nav-item custom-nav-item"><a href="/CAR%20ACCESSORIES/payment.php" class="nav-link">Payment source</a></li>
        <!-- <li class="nav-item custom-nav-item"><a href="admindashboard.php" class="nav-link">Admin</a></li> -->
        <li class="nav-item custom-nav-item"><a href="/CAR%20ACCESSORIES/products.php" class="nav-link">Pouduct</a></li>
        <li class="nav-item custom-nav-item"><a href="/CAR%20ACCESSORIES/customer/feedback.php" class="nav-link">Feedback</a></li>
<?php   }
        else
        { ?>        
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#cusRegModalCenter">sign up</a></li>
        <li class="nav-item custom-nav-item"><a href="javascript:void(0);" class="nav-link" data-bs-toggle="modal" data-bs-target="#cusLoginModalCenter">login</a></li>
<?php   } ?>
        
<?php   if(isset($_SESSION) && $_SESSION)
        { ?>
        <li class="nav-item custom-nav-item"><a href="/CAR%20ACCESSORIES/customer/CustomerProfile.php" class="nav-link">Customer profile</a></li>
        <li class="nav-item custom-nav-item"><a href="/CAR%20ACCESSORIES/logout.php" class="nav-link">logout</a></li>
<?php   } ?>
      </ul>
    </div>
  </div>
</nav>
    <!-- end navigation -->