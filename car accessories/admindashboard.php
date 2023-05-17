<?php
include('./admin/admininclude/header.php');

if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)
{
    header("Location:admindashboard.php");
    //echo "logged in";
}
?>


<div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                          <div class="card-header">Prouducts</div>
                          <div class="card-body">
                            <h4 class="card-title">
                                12
                            </h4>
                            <a class="btn text-black" href="adminproducts.php">View</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Customer</div>
                            <div class="card-body">
                              <h4 class="card-title">
                               10
                              </h4> 
                              <a class="btn text-black" href="admincustomer.php">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Feedback</div>
                            <div class="card-body"> 
                              <h4 class="card-title">
                               Your Feedback our Improvment
                              </h4>
                              <a class="btn text-black" href="adminfeedback.php">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <!--Table-->
                    <p class="bg-dark text-white p-2">Products Ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">Coustomer Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>13</td>
                                <td>jitu@gmail.com</td>
                                <td>20/10/2022</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>5</td>
                                <td>janki@gmail.com</td>
                                <td>20/10/2022</td>
                                <td>2500</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>8</td>
                                <td>vish@gmail.com</td>
                                <td>20/10/2022</td>
                                <td>3000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- div Row close form header -->
</div><!-- div Conatiner-fluid close from header-->



<?php
include('./admin/admininclude/footer.php');

?>