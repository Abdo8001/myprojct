<?php
include 'connctu.php';

// $updatq="update `categories`set `id`='19',`name`='ahmade'where `id`='5'";
$updatq="DELETE FROM `categories`where `id`='19'";
$consql=mysqli_query($con,$updatq);

$affecterow=mysqli_affected_rows($con);
if($affecterow>=1){
    echo "done";
}


?>