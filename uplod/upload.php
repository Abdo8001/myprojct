<?php
session_start();
$errors=[];
$image_file = $_FILES["image"];
$img =$_FILES['image']['name'];
$imgsize =$_FILES['image']['size'];
$imgtyp =$_FILES['image']['type'];
$imgtmp =$_FILES['image']['tmp_name'];
$allowext=['jbng','jpg','png','gif','avg'];
$explods=explode(".",$img);

$imgext=end($explods);
if(empty($img)){
    $errors[]="imge is requerd";

}elseif(!in_array($imgext,$allowext)){
$errors[]="the extention not allowed";
}elseif($imgsize>2097152){
    $errors[]="the size is larg";

}
if(empty($errors)){
    $imgd=time()."_".$img;
    move_uploaded_file($imgtmp,"imgea/".$imgd);
$_SESSION['sucss']="img uploded";
header("location:index.php");
exit;
    }else{
        $_SESSION['errors']=$errors;
        header("location:index.php");
        exit;
        // foreach($errors as $error){
        //     echo "$error <br>";
        // }
    }
?>
