<?php
include('./admin/admininclude/header.php');
include('./js/dbconnection.php');

if(isset($_REQUEST['productSubmitBtn'])){
    // CHECKING for empty fields
    if(($_REQUEST['Customer_name'] == "")  || ($_REQUEST['Customer_Email'] =="") || ($_REQUEST['Customer_Pass'] =="")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $Customer_name = $_REQUEST['Customer_name'];
        $Customer_Email = $_REQUEST['Customer_Email'];
        $Customer_Pass=$_REQUEST['Customer_Pass'];

        $sql = "INSERT INTO `cus` (`Customer_name`, `Customer_Email`, `Customer_Pass`)
        VALUES ('$Customer_name','$Customer_Email','$Customer_Pass')";
        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Customer Added Successfully</div>';    
        }else{
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Customer</div>';
        }

        
    }



}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Customers</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lable for="Customer_name">Name</lable>
            <input type="text" class="form-control" id="Customer_name" name="Customer_name">
        </div>

        <div class="form-group">
            <lable for="Customer_Email">Email</lable>
            <input type="text" class="form-control" id="Customer_Email" name="Customer_Email">
        </div>

        <div class="form-group">
            <label for="Customer_Pass">Pass</label>
            <input type="text" class="form-control" id="Customer_Pass" name="Customer_Pass">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="productSubmitBtn" name="productSubmitBtn">Submit</button>
            <a href="adminproducts.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div> <!-- div close form header -->
</div> <!-- div conatiner-fluid close form header-->




<?php
include('./admin/admininclude/footer.php');
?>