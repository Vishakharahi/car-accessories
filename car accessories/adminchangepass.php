<?php 
if(!isset($_SESSION)){
    session_start();
}
include('./admin/admininclude/header.php');
include('./js/dbconnection.php');

if(isset($_SESSION['is_admin_login'])){
    $cusLogemail = $_SESSION['cusLogemail'];
}else{
    echo"<script> location.herf='..index.php';</script>";
}
$cusLogemail = $_SESSION['email'];
if(isset($_REQUEST['adminPassUpdatebtn'])){
    if(($_REQUEST['cusLogpass'] == "")){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileads </div>';
    }else{
        $sql = "SELECT * FROM `cus` WHERE `Customer_Email` ='$cusLogemail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $Customer_Pass = $_REQUEST['cusLogpass'];
            $sql = "UPDATE `cus` SET `Customer_Pass` = '$Customer_Pass' WHERE Customer_Email = '$cusLogemail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
            }else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
            }
        }
    }
}
?>

<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="inputEmail" value="<?php echo $cusLogemail ?>"readonly>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="inputnrwpassword">Password</label>
                <input type="text" class="form-control" placeholder="New Password"  id="inputnewpassword" name="cusLogpass">
            </div>
            <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
            <button type="reset" class="btn btn-secondary mt-4">Reset</button>
            <?php if(isset($passmsg)) {echo $passmsg; }?>
        </form>
    </div>
</div>
</div>



</div>
</div>
<?php
include('./admin/admininclude/footer.php');
?>