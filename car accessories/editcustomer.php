<?php
include('./admin/admininclude/header.php');
include('./js/dbconnection.php');
session_start();
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    
    <?php 
    if(isset($_REQUEST['view'])){
        $sql="SELECT * FROM `cus` WHERE `Customer_ID`={$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <h3 class="text-center">Update Customer Details</h3>
    <form action="updatecustomer.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lable for="Customer_ID">ID</lable>
            <input type="hidden" class="form-control" id="Customer_ID" name="Customer_ID" 
            value="<?php  if(isset($row['Customer_ID'])){echo $row['Customer_ID'];} ?>">
        </div>

        <div class="form-group">
            <lable for="Customer_name">Name</lable>
            <input type="text" class="form-control" id="Customer_name" name="Customer_name" 
            value="<?php  if(isset($row['Customer_name'])){echo $row['Customer_name'];} ?>">
        </div>

        <div class="form-group">
            <lable for="Customer_Email">Email</lable>
            <input type="text"  class="form-control" id="Customer_Email" name="Customer_Email"
            value="<?php  if(isset($row['Customer_Email'])){echo $row['Customer_Email'];} ?>">
        </div>

        <div class="form-group">
            <lable for="Customer_Pass">Password</lable>
            <input type="text" class="form-control" id="Customer_Pass" name="Customer_Pass" 
            value="<?php  if(isset($row['Customer_Pass'])){echo $row['Customer_Pass'];} ?>">
        </div>

        

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="productSubmitBtn" name="productSubmitBtn">Update</button>
            <a href="adminproducts.php" class="btn btn-secondary">Close</a>
        </div>
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
</div> <!-- div close form header -->
</div> <!-- div conatiner-fluid close form header-->







<?php
include('./admin/admininclude/footer.php');
?>