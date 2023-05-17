<?php
include('./js/dbconnection.php');
session_start();
if(!isset($_SESSION['email'])){
    echo"<script> location.href = 'loginorsignup.php'</script>";
}else{
    header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    $cusLogemail=$_SESSION['email'];
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="GENERATOR" content="Evrsoft First Page">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>checkout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"href="css/bootstrap.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>

    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 jumbotron">
                    <h3 class="mb-5">Welcome to JV car accessories payment page</h3>
                    <form method="POST" action="./PaytmKit/pgRedirect.php">
                        <div class="form-group row">
                            <lable for="ORDER_ID" class="col-sm-4 col-form-lable">Order ID</label>
                            <div class="col-sm-8">
                            <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                            value="<?php echo "ORDS" . rand(10000,99999999)?>" readonly>
                        </div>
                        </div>
                        <div class="form-group row">
                            <lable for="CUST_ID" class="col-sm-4 col-form-lablel">customer id</label>
                            <div class="col-sm-8">
                            <input id="CUST_ID" class="form-control" tabindex="10" type="text" maxlenth="12" size="12" name="CUST_ID" autocomplete="off"
                            value="<?php if(isset($CUST_ID)){echo  $CUST_ID;}?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <lable for="TXN_AMOUNT" class="col-sm-4 col-form-lablel">Amount</label>
                            <div class="col-sm-8">
                            <input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text"  name="TXN_AMOUNT" 
                            value="<?php if(isset($_POST['price'])){echo $_POST['price'];}?>" readonly>
                        </div>
                        <div class="form-group row">
                           <!-- <lable for="ORDER_ID" class="col-sm-4 col-form-lable">Order ID</label>-->
                            <div class="col-sm-8">
                            <input type="hidden"  id="INDUSTRY_TYPE_ID"class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off"
                            value="Retail">
                        </div>
                        </div>
                        <div class="form-group row">
                            <!--<lable for="CANCEL_ID" class="col-sm-4 col-form-lable">Cancel ID</label>-->
                            <div class="col-sm-8">
                            <input type="hidden"  id="CHANNEL_ID"class="form-control" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off"
                            value="WEB">
                        </div>
                        </div>
                        <div class="text-center">
                            <input value="checkout" type="submit" class="btn btn-primary" conclic="">
                            <a href="./prducts.php" class="btn btn-secondary">cancel</a>
                        </div>
                        </form>
                        <small class="form-text- text-muted">Note: Complete Payment buy Clicking Checkout button</small>
                    </div>
                </div>
            </div>  
    </body>
</html>

<?php }

?>

        
    