<?php
include('../MAININCLUDE/header.php');
include('../js/dbconnection.php');
//session_start();

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
    
}
if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content'] == "")){
        $msg = '<div class = "alt alt-warning col-sm-6 ml-5 mt-2" role="alter">Fill All Fields </div>';
    } else{
        $fcontent = $_REQUEST["f_content"];
        $sql="INSERT INTO `feedback` (`f_content` ,`Customer_ID`) VALUES('$fcontent','$cusId')";
        if($conn -> query($sql) == TRUE){
            $msg ='<div class= "alter alter-danger col-sm-6 ml-5 mt-2" role ="alter">Submited Successfully </div>';
        }
    }
}

?>
<div class = " col-sm-6 empty-5">
    <form class ="mx-5" method="POST" enctype ="multipart/form-data">
        <div class ="from-group">
            <label for ="cusId">customer id</label>
            <input type ="text" class ="form-control" id="cusId" name ="cusId" value ="<?php if (isset($cusId)) 
            {echo $cusId;} ?>"readonly>
        </div>

        <div class ="from-group">
            <label for ="feedback">write feedback:</label>
            <textarea  class ="form-control" id="f_content" name ="f_content" row = 2></textarea>
        </div>
        <button type ="submit" class ="btn btn-primary" id="submitFeedbackBtn" name ="submitFeedbackBtn">Submit</button>
        <?php if(isset($msg)){
         echo $msg;
        }
        ?>
    </form>
</div>
</div>
    
<?php
//include('../MAININCLUDE/footer.php');
?>
