<?php
include('./admin/admininclude/header.php');
include('./js/dbconnection.php');

if(isset($_REQUEST['productSubmitBtn'])){
    // CHECKING for empty fields
    if(($_REQUEST['product_name'] == "")  || ($_REQUEST['product_desc'] =="") || ($_REQUEST['product_brand&material'] =="") || 
     ($_REQUEST['product_gurantee'] =="") || ($_REQUEST['product_price'] =="") || 
    ($_REQUEST['product_original_price']  =="")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $product_name = $_REQUEST['product_name'];
        $product_desc = $_REQUEST['product_desc'];
        $product_brandandmaterial=$_REQUEST['product_brand&material'];
        // $product_img = $_FILES['product_img']['name'];
        // $product_img_temp = $_FILES['product_img']['tmp_name'];
        // $img_folder = './CAR ACCESSORIES/images/'.$product_img;
        // move_uploaded_file($product_img_temp,$img_folder);

        $target_dir = "./images/";
        $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["product_img"]["tmp_name"]);
        move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file);

        $product_gurantee = $_REQUEST['product_gurantee'];
        $product_price = $_REQUEST['product_price'];
        $product_original_price = $_REQUEST['product_original_price'];

        $sql = "INSERT INTO `adminproducts`(`product_name`, `product_desc`, `product_brand&material`, `product_img`, `product_gurantee`, `product_price`, `product_original_price`) VALUES ('$product_name','$product_desc','$product_brandandmaterial','$target_file','$product_gurantee',
        '$product_price','$product_original_price')";
        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Product Added Successfully</div>';    
        }else{
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Product</div>';
        }

        
    }



}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Products</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lable for="product_name">Product Name</lable>
            <input type="text" class="form-control" id="product_name" name="product_name">
        </div>

        <div class="form-group">
            <lable for="product_desc">Product Description</lable>
            <textarea  class="form-control" id="product_desc" name="product_desc" row=2></textarea>
        </div>

        <div class="form-group">
            <lable for="product_brand&material">Product Brand&material</lable>
            <input type="text" class="form-control" id="product_brand&material" name="product_brand&material">
        </div>

        <div class="form-group">
            <label for="product_img">product img</label>
            <input type="file" class="form-control-file" id="product_img" name="product_img">
        </div>

        <div class=" form-group">
            <label for=" product_gurantee">product gurantee</label>
            <input trype="text"class="form-control"id="product_gurantee" name="product_gurantee">
        </div>

        <div class="form-group">
            <label for="product_price">product price</label>
            <input type="text" class="form-control" id="product_price" name="product_price">
        </div>

        <div class="form-group">
            <label for="product_original_price"> product original price</label>
            <input type="text" class="form-control" id="product_original_price" name="product_original_price">
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