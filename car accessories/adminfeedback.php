<?php
include('./admin/admininclude/header.php');
include('./js/dbconnection.php');
//session_start();

?>

<div class="col-sm-9 mt-5">
     <!--Table-->
<?php    
if(isset($_SESSION['success']) && $_SESSION['success'])
{
    echo $_SESSION['success'];
    unset($_SESSION['success']);    
}
?>
     <p class="bg-dark text-white p-2">List of Feedback</p>
     <?php 
      $sql = "SELECT * FROM `feedback`";
      $result = $conn->query($sql);
      if($result-> num_rows > 0){
     ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Feedback ID</th>
                <th scope="col">Feedback</th>
                <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
           <?php while($row = $result-> fetch_assoc()){ 
             echo'<tr>';
                echo'<th scope="row">'.$row['Customer_ID'].'</th>';
                echo'<td>'.$row['f_content'].'</td>';
                echo'<td>';
                    echo'
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
        $sql="DELETE FROM `feedback` WHERE `Customer_ID`={$_REQUEST['id']}";
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



<?php
include('./admin/admininclude/footer.php');
?>