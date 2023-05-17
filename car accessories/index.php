<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- start header part-->
<?php
include('./js/dbconnection.php');
include('./MAININCLUDE/header.php');

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)
{
    header("Location:admindashboard.php");
    
}

?>

<!-- end header part-->

<!-- start video backgraound -->
    <div class="container-fluid remove-vid-marg">
     <div class="vid-parent">
        <video playsinline autoplay muted loop>
        <source src="video/vjcar.mp4">
        </video> 
        <div class="vid-overlay"></div>
    </div>
    <div class ="vid-content">
        <div class="title-tex" style="
            position: relative;
            bottom: 548px;
            left: 494px;">
            <h1 class ="my-content text-white" >Welcome to JV car accessories</h1>
            <small class="my-content text-white">comfortable journey</small><br />

            
        </div>
    <!-- end video backgraound -->
    
    <h1 class="text-center">Populer Products</h1>
    <!-- start most popular product-->
    <div class="card-deck mt-4">
        <?php
           $sql = "SELECT * FROM `adminproducts` LIMIT 4";
           $result = $conn->query($sql);
           if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $product_id = $row['product_id'];
                echo'
                <a href="products.php?product_id='.$product_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                    <div class="card">
                        <img src="'. $row['product_img'].'"  alt="CAR ACCESSORIES"/>
                        <div class="card-body">
                            <h5 class="card-title">'.$row['product_name'].'</h5>
                            <p class="card-text">'.$row['product_desc'].'<br>
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">'.$row['product_price'].' <small><del> '.$row['product_original_price'].' </del></small></p>
                        </div>
                    </div>
                </a>';
            
        }
        }
        ?>
    </div>

    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="products
        .php">View All Product</a>
    </div>
    </div>

        
    
   
    <!-- start ragistration form-->
    <?php
    include('./sign up.php');
    ?>
    <!-- end ragistration form-->
    
    <!-- start login form-->
    <?php
    include('./login.php');
    ?>
    <!-- end login form-->

    <!-- start contactus form-->

    <div class="container mt-4" id="contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
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

<!-- start customer testimonial-->
<div class="countainer-fluid mt-5" style="background-color:#4b7289" id="Feedback">
<h1 class="text-center testyheading p-4"> Customer's Feedback </h1>
<div class="row">
    <div class="col-md-12">
        <div id="testimonial-slider" class="owl-carousel">
        <?php
           $sql = "SELECT C.Customer_name,C.Customer_img,F.f_content FROM  `cus` AS C JOIN `feedback` AS F ON C.Customer_ID = F.Customer_ID";
           $result = $conn->query($sql);
           if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $c_img = $row['Customer_img'];  
        ?>
        
        <div class="text-center testimonial">
                <p class="description">
                <?php echo $row['f_content'];
                ?>
                </p>
            <div class="pic">
                <img src="<?php echo $n_img ?>" alt=""/>
            </div>
            <div class="testimonial-prof">
                <h4><?php echo $row['Customer_name']  ?></h4>
            </div>
        </div>
        <?php }
        } ?>
    </div>
</div>
</div>
</div>



    <!-- start admin form-->
    <?php
    include('./admin.php');
    ?>
    <!-- end admin form-->

    <!--start text banner -->
    <div class="cotainer-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>15+ online products</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Products Instruction</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fa fa-inr"></i> Back Gurantee*</h5>
            </div>
        </div>
    </div>
    <!-- end text banner-->

    <!-- start footer-->
    <?php
    include('./MAININCLUDE/footer.php');
    ?>
    <!-- end footer-->
    
     <!-- jquer and bootstrap javascript -->  
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
     <!-- font awesome js -->
  <script src="js/all.min.js"></script>
  <!-- customer ajex call js -->
  <script type="text/javascript" src="js/ajaxrequest.js"></script>
  </body>
</html> 