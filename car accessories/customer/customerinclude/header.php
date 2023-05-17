<?php
include('../js/dbconnection.php');
session_start();
if(isset($_SESSION)){
    
}

if(isset($_SESSION['email'])){
    $cusLogemail=$_SESSION['email'];
}

if(isset($cusLogemail)){
    $sql="SELECT Customer_img FROM `cus` WHERE `Customer_Email`='$cusLogemail'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $Customer_img=$row['Customer_img'];
}
?>

<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scaled=1.0"/>
        <title> dashboard </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"href="/car accessories/css/bootstrap.min.css">

        <!-- font awesome CSS -->
        <link rel="stylesheet"href="/car accessories/css/all.min.css">

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!--custom css-->
        <link rel="stylesheet" href="/car accessories/css/adminstyle.css">
    </head>

    <body>
        <!-- Top Navbar -->
        <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" herf="admindashboard.php">jv car accessories </a>
        </nav>
        <!-- side bar -->
        <div class="container-fluid mb-5" style="margin-top:40px;">
          <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                        <img src="<?php echo $Customer_img ?>" alt="Customerimage"
                        class="img-thumbnail">
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="CustomerProfile.php">
                            <i class="fas fa-user"></i>   
                            Profile
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="changepass.php">
                            <i class="fas fa-key"></i>
                            Change Password  
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
