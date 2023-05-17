<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cms_db";

// create connection 
$conn=new mysqli($db_host,$db_user,$db_password,$db_name);

//check connection
// if($conn->connection_error){
//     die("connection failed");
// }

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>