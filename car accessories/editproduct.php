<?php
include('./admin/admininclude/header.php');
include('./js/dbconnection.php');
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Product Details</h3>

    <?php 
    if(isset($_REQUEST['view'])){
        $sql="SELECT * FROM `adminproducts` WHERE product_id={$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="updateproduct.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lable for="product_id">Product ID</lable>
            <input type="text" class="form-control" id="product_id" name="product_id" 
            value="<?php  if(isset($row['product_id'])){echo $row['product_id'];} ?>" readonly>
        </div>

        <div class="form-group">
            <lable for="product_name">Product Name</lable>
            <input type="text" class="form-control" id="product_name" name="product_name" 
            value="<?php  if(isset($row['product_name'])){echo $row['product_name'];} ?>">
        </div>

        <div class="form-group">
            <lable for="product_desc">Product Description</lable>
            <textarea  class="form-control" id="product_desc" name="product_desc" row=5>
                <?php  if(isset($row['product_desc'])){echo $row['product_desc'];} ?></textarea>
        </div>

        <div class="form-group">
            <lable for="product_brand&material">Product Brand&material</lable>
            <input type="text" class="form-control" id="product_brand&material" name="product_brand&material"  
            value="<?php  if(isset($row['product_brand&material'])){echo $row['product_brand&material'];} ?>">
        </div>

        <div class="form-group">
            <label for="product_img">product img</label>
            <img src="<?php if(isset($row['product_img'])){echo $row['product_img'];} ?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="product_img" name="product_img"
            value="<?php  if(isset($row['product_img'])){echo $row['product_img'];} ?>">
        </div>

        <div class=" form-group">
            <label for=" product_gurantee">product gurantee</label>
            <input trype="text"class="form-control"id="product_gurantee" name="product_gurantee"
            value="<?php  if(isset($row['product_gurantee'])){echo $row['product_gurantee'];} ?>">
        </div>

        <div class="form-group">
            <label for="product_price">product price</label>
            <input type="text" class="form-control" id="product_price" name="product_price"
            value="<?php  if(isset($row['product_price'])){echo $row['product_price'];} ?>">
        </div>

        <div class="form-group">
            <label for="product_original_price"> product original price</label>
            <input type="text" class="form-control" id="product_original_price" name="product_original_price"
            value="<?php  if(isset($row['product_original_price'])){echo $row['product_original_price'];} ?>">
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
    unset($_SESSION['Products']);    
}
?>
    </form>
</div>
</div> <!-- div close form header -->
</div> <!-- div conatiner-fluid close form header-->







<?php
include('./admin/admininclude/footer.php');
?>