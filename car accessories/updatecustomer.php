<?php
include('./js/dbconnection.php');
session_start();

        $cid = $_REQUEST['Customer__ID'];
        $cname = $_REQUEST['Customer_name'];
        $cemail = $_REQUEST['Customer_Email'];
        $cpass = $_REQUEST['Customer_Pass'];
        
        $sql = "UPDATE `cus` SET `Customer_name`='$cname',`Customer_Email`='$cemail',`Customer_Pass`='$cpass' 
         WHERE `Customer_ID`='$cid'";
         if($conn->query($sql)  == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';    
        }else{
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
         }
         $_SESSION['success'] = $msg;
         header("Location: admincustomer.php");

?>
