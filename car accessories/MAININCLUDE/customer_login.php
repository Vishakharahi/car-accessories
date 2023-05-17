<?php
    include_once('../js/dbconnection.php');
    session_start();

    $email = $_POST['cusLogemail'];
    $pass = $_POST['cusLogpass'];
    $rows = 0;
    if($email && $pass )
    {
        $user = $conn->query("SELECT * FROM `cus` WHERE `Customer_Email` = '".$email."' AND `Customer_Pass` = '".$pass."' ");
        $rows = mysqli_num_rows($user);
        if($rows)
        {
            $user = $user->fetch_assoc();
            $_SESSION['id'] = $user['Customer_ID'];
            $_SESSION['name'] = $user['Customer_name'];
            $_SESSION['email'] = $user['Customer_Email'];
            $_SESSION['is_admin']=$user['is_admin'];
        }
    }
    echo $rows;
?>