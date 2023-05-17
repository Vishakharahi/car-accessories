<!-- start header-->
<?php
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


<!-- start contactus form-->
<div class="container mt-4" id="contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="contactuscon.php" method="post">
                <input type="text" id="name" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" id="product" class="form-control" name="product" placeholder="Product"><br>
                <input type="email" id="email" class="form-control" name="email" placeholder="E-mail"><br>
                <textarea class="form-control" id="massage" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
                <input class="btn btn-primary" id="Submit" type="submit" value="Submit" name="submit"><br><br>
            </form>
        </div>
        <div class="col-md-4 stripe text-whith text-center">
            <h4>JV CAR ACCESSORIES</h4>
            <p>jv car accessories,ground floor moti palace,madhuram road<br>
            Junagadh - 362002<br>
            Phone:7490803089<br>
            or<br>
            9870048270<br>
            www.jvcaraccessories.com
            </p>
        </div>
    </div>
</div>
<!-- end contactus form-->

<!-- start footer-->
<?php
include('./MAININCLUDE/footer.php');
?>
<!-- end footer>
