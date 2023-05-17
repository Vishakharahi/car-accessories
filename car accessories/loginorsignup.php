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

<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <form role="form" id="cusLoginForm">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="cusLogemail" class="p1-2 font-wight-bold">Email</label>
                    <small id="statusLogMsg"></small>
                    <input type="email" class="form-control" placeholder="Email" name="cusLog" id="cusLogemail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="cusLogpass" class="p1-2 font-wight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="New Password" name="cusLogpass" id="cusLogpass" aria-describedby="emailHelp">
                </div>
                <button type="button"  class="btn btn-primary" onclick="checkcusLogin()" id="login">Login</button>
            </form><br/>
            <small id="statusLogMsg"></small>
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">New User !! Sign Up </h5>
            <form role="form" id="cusRegForm">
        <div class="form-group">
          <i class="fas fa-user"></i>
          <label for="cusname" class="p1-2 font-wight-bold">Name</label>
          <small id="statusMsg1"></small>
          <input type="text" class="form-control" placeholder="Name" name="cusname" id="cusname" aria-describedby="emailHelp">
       </div>
       <div class="form-group">
          <i class="fas fa-envelope"></i>
          <label for="cusemail" class="p1-2 font-wight-bold">Email</label>
          <small id="statusMsg2" class="text-danger"></small>
          <input type="email" class="form-control" placeholder="Email" name="cusname" id="cusemail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <div class="form-group">
          <i class="fas fa-key"></i>
          <label for="cuspass" class="p1-2 font-wight-bold">New Password</label>
          <small id="statusMsg3"></small>
          <input type="password" class="form-control" placeholder="New Password" name="cuspass" id="cuspass" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
       </div>
       <button type="button" class="btn btn-primary" onclick="addcus()" id="sign up">Sign up</button>
    </form><br/>
    <small id="statusLogMsg"></small>
    </div>
</div>
</div>

<!-- start contactus form-->
<div class="container mt-4" id="contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                <input type="text" class="form-control" name="email" placeholder="E-mail"><br>
                <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
                <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
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
<!-- end footer-->

