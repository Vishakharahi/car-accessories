<?php

include('./admin/admininclude/header.php');
include('./js/dbconnection.php');

?>

<div class="col-sm-9 mt-5">
     <!--Table-->
     <p class="bg-dark text-white p-2">List of Customers</p>
     <?php 
      $sql = "SELECT * FROM `cus`";
      $result = $conn->query($sql);
      if($result-> num_rows > 0){
     ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Customer ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
           <?php while($row = $result-> fetch_assoc()){ 
             echo'<tr>';
                echo'<th scope="row">'.$row['Customer_ID'].'</th>';
                echo'<td>'.$row['Customer_name'].'</td>';
                echo'<td>'.$row['Customer_Email'].'</td>';
                echo'<td>';
                    echo'
                    <form action="editcustomer.php" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row["Customer_ID"].'>
                    <button type="submit" class="btn btn-info mr-3" name="view" value="View">
                        <i class="fas fa-pen"></i>
                    </button>
                    </form>
                    <form  action=" " method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row["Customer_ID"].'>
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                        <i class="far fa-trash-alt"></i>
                    </button>
                    </form>
                </td>
            </tr>';
             } ?>
        </tbody>
    </table>
    <?php } else {
        echo "0 Result";
    }
    if(isset($_REQUEST['delete'])){
        $sql="DELETE FROM `cus` WHERE `Customer_ID`={$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo'<meta http-equiv="refresh" content="0;URL=?deleted"/>';
        }
        else{
            echo"unable to Delete Data";
        }
    }


    ?>
</div>
</div>


<!--div row close from header-->
<div> 
 <a class="btn btn-danger box" href="./addcustomer.php">
    <i class="fas fa-plus fa-2x"></i>
</a>
</div>
</div>  



<?php
include('./admin/admininclude/footer.php');
?>