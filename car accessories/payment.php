<!-- start header-->
<?php
include('./MAININCLUDE/header.php');
?>
<!-- end header-->

<!-- start product page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <image src="./images\JVcar.webp" alt="product"
        style="height:600px; width:150%; object-fit:cover;
        box-shadow:10px;"/>
    </div>
</div>
<!-- end product page banner -->

<!-- start main content-->
<div class="container">
    <h2 class="text-center my-4">payment status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID: </label>
        </div>
        <div>
            <input type="text" class="form-control mx-3" placeholder="Order ID">
        </div> 
        <div>
            <input type="submit" class="btn btn-primary mx-4" value="view">
        </div>
    </form>
</div>
<!-- end main content-->

    


<!-- start footer-->
<?php
include('./MAININCLUDE/footer.php');
?>
<!-- end footer>

