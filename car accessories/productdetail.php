<!-- start header-->
<?php
include('./js/dbconnection.php');
include('./MAININCLUDE/header.php');
?>
<!-- end header-->
<!-- start product page banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <image src="./images\JVcar.webp" alt="product"
        style="height:600px; width:100%; object-fit:cover;
        box-shadow:10px;"/>
    </div>
</div>

<!-- end product page banner -->

<!-- start main content-->
<div class="container mt-5">
    <?php
      if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        $_SESSION['product_id'] = $product_id;
        $sql = "SELECT * FROM `adminproducts` WHERE product_id = '$product_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    if(isset($row) && $row)
    {
?>
<div class="row">
    <div class="col-md-4">
        <img src="<?php echo $row['product_img'] ?>" class="card-img-top" alt="seat covers"/>
    </div>
    <div class= "col-md-8">
        <div class="card-body">
            <h5 class="card-title">Product name: <?php echo $row['product_name'] ?> </h5>
            <p class="card-text">Description: <?php echo $row['product_desc'] ?></p>
            <form action="checkout.php" method="post">
            <p class="card-text d-inline">Price:<?php echo $row['product_price'] ?> 
            <small> <del> original price: <?php echo $row['product_original_price'] ?> </del>  </small>  </p>
            <input type="hidden" name="price" value="<?= $row['product_price'] ?>">
            <button type ="submit" class ="btn btn-primary text-white font-weight bolder float-right" name="Buy">Buy Now</button>
           </form>
       </div>
    </div>
</div>
<?php } ?>

<!-- end main content -->


