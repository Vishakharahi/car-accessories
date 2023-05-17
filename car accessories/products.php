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





<!--  start all product-->
<div class="container mt-5">
    <h1 class="text-center">All Product</h1>
    <div class="row mt-4">
    <?php
       $sql = "SELECT * FROM `adminproducts`";
       $result = $conn->query($sql);
       if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $product_id = $row['product_id'];
            echo"
            <div class='col-sm-4 mb-4'>
            <a href='productdetail.php?product_id=".$product_id."' class='btn' style='text-align: left; padding:0px; margin:0px;'>
            <div class='card'>
                <img src='".$row['product_img']."' class='card-img-top' alt='seatcover' />
                <div class='card-body'>
                    <h5 class='card-title'>".$row['product_name']."</h5>
                    <p class='card-text'>".$row['product_desc']."</p>
                </div>
                
            </div>
            </a>
            </div>";
        }
       }










