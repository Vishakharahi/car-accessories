<?php
include_once('../js/dbconnection.php');
//chaecking email already registered
if(isset($_POST['checkemail'])&& isset($_POST['cusemail'])){
    $cusemail = $_POST['cusemail'];
    $sql = "SELECT cus_email FROM customer where cus_email='".
    $cusemail."'";
    $result = $conn->query($sql);
    $row = $result-> num_rows;
    echo json_encode($row);
}


//Insert customer
    
$cusname = $_POST['cusname'];
$cusemail = $_POST['cusemail'];
$cuspass = $_POST['cuspass'];

if($cusemail)
{
    $result = $conn->query("SELECT * FROM cus WHERE `Customer_Email` = '".$cusemail."'");
    $rows = mysqli_num_rows($result);

    if($rows > 0)
    {
        echo "403";
        return false;
    }
    else
    {
        $sql="INSERT INTO cus(Customer_name,Customer_Email,Customer_Pass) VALUES ('".$cusname."','".$cusemail."','".$cuspass."')";

        if($conn->query($sql) == TRUE){
            echo json_encode("OK");
            // echo 1; 
        }
        else{
            echo json_encode("failed");
        }
    }
}
else
{
    echo json_encode("failed");
}

?>