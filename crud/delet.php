<?php
include 'connct.php';
if(isset($_GET['id'])){
     $id=$_GET['id'];
$delequr="DELETE FROM `admin`where`admin_id`='$id'; ";
$qureyt=mysqli_query($conct,$delequr);
// echo "<div class='alert alert-success'>
//                 Category deleted Successfully!
//             </div>";
header("Location:datashow.php");
    exit;


}else{
    header("Location:add.php");
    exit;
}

?>