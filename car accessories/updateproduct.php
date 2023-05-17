<?php
include('./js/dbconnection.php');
session_start();

        $pid = $_REQUEST['product_id'];
        $pname = $_REQUEST['product_name'];
        $pdesc = $_REQUEST['product_desc'];
        $pbrandandmaterial=$_REQUEST['product_brand&material'];
        $pimg = "images/".$_FILES['product_img']['name'];
        $pgurantee = $_REQUEST['product_gurantee'];
        $pprice = $_REQUEST['product_price'];
        $poriginalprice = $_REQUEST['product_original_price'];

        $sql = "UPDATE `adminproducts` SET `product_name`='$pname', `product_desc`='$pdesc', 
        `product_brand&material`='$pbrandandmaterial', `product_img`='$pimg', 
        `product_gurantee`='$pgurantee', `product_price`='$pprice', `product_original_price`='$poriginalprice'
         WHERE `product_id`='$pid'";
         if($conn->query($sql)  == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';    
        }else{
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
         }
         $_SESSION['success'] = $msg;
         header("Location: adminproducts.php");

?>
