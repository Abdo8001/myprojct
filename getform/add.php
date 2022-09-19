<?php
include 'connctu.php';
if(isset($_POST['submit'])){
    $name1=htmlspecialchars(trim($_POST['name1']));
    $descr=htmlspecialchars(trim($_POST['descr1']));
    $errors=[];
    if(empty($name1)){
        $errors[]="name not allow to be emty";
    }elseif(strlen($name1)<3){
        $errors[]="name must be more than 3";

    }
        if(empty($descr)){
            $errors[]="describtion not allow to be emty";
        }
        if(empty($errors)){
            $sqlinsrt="INSERT INTO `categories`(`name`,`description`)
            VALUES('$name1','$descr') ";
            $consql2=mysqli_query($con,$sqlinsrt);
            $affecterow=mysqli_affected_rows($con);
        }else{
            echo "<pre>";
            print_r($errors);
            echo"</pre>";
        }
}else{
    echo "eror";
}
?>