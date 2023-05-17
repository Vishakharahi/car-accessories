<?php

include('./customerinclude/header.php');
include('../js/dbconnection.php');
// session_start();
$cusLogemail = '';
if(isset($_SESSION['email'])){
    $cusLogemail=$_SESSION['email'];
}else{
    echo "<script> location.herf='./index.php'; </script>";
}

$sql = "SELECT * FROM `cus` WHERE `Customer_Email`='$cusLogemail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $cusId = $row["Customer_ID"];
    $cusName = $row["Customer_name"];
    $cusorder = $row["Customer_order"];
    $cusImg = $row["Customer_img"];
    
}
if(isset($_REQUEST['productSubmitBtn'])){
    if(($_REQUEST['Customer_name'] == "")){
    //msg dispiayed if required field missing
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    }else{
    $cusName = $_REQUEST["Customer_name"];
    $cusEmail = $_REQUEST["Customer_Email"];
    $cusorder = $_REQUEST["Customer_order"];
    // $Customer_img = $_FILES['Customer_img']['tmp_name'];
    // $img_folder ='./images/';
    // move_uploaded_file($Customer_img,$img_folder);

    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["Customer_img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["Customer_img"]["tmp_name"]);
    move_uploaded_file($_FILES["Customer_img"]["tmp_name"], $target_file);

    // $img =  $img_folder.$Customer_img;
    $sql = "UPDATE `cus` SET `Customer_name`= '$cusName',`Customer_order`='$cusorder',`Customer_img`='$target_file' WHERE `Customer_Email` = '$cusEmail'";
    
    if($conn->query($sql) == TRUE){
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';    
        }else{
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
        }
    }
}
?>
<div class="col-sm-6 mt-5">

<form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lable for="Customer_ID">ID</lable>
            <input type="hidden" class="form-control" id="Customer_ID" name="Customer_ID" 
            value="<?php  if(isset($row['Customer_ID'])){echo $row['Customer_ID'];} ?>">
        </div>

        <div class="form-group">
            <lable for="Customer_name">Name</lable>
            <input type="text" class="form-control" id="Customer_name" name="Customer_name" 
            value="<?php  if(isset($Customer_name)){echo $row['Customer_name'];} ?>">
        </div>

        <div class="form-group">
            <lable for="Customer_Email">Email</lable>
            <input type="text"  class="form-control" id="Customer_Email" name="Customer_Email"
            value="<?php echo $cusLogemail ?>" readonly>
        </div>

        <div class="form-group">
            <lable for="Customer_order">Order</lable>
            <input type="text" class="form-control" id="Customer_order" name="Customer_order" 
            value="<?php  if(isset($Customer_order)){echo $row['Customer_order'];} ?>">
        </div>


        <div class="form-group">
            <lable for="Customer_img"> Upload Image</lable>
            <input type="file" class="form-control" id="Customer_img" name="Customer_img">
        </div>
        <button type="submit" class="btn btn-primary" id="productSubmitBtn" name="productSubmitBtn">Update</button>
        <?php if(isset($msg)) {echo $msg;} ?>
        <?php    
if(isset($_SESSION['success']) && $_SESSION['success'])
{
    echo $_SESSION['success'];
    unset($_SESSION['Customers']);    
}
?>
</form>
</div>
</div>

<?php
include('./customerinclude/footer.php');
?>