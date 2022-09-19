<?php
$host='localhost';
$user='root';
$password='';
$database='phpfdata';
$con=mysqli_connect($host,$user,$password,$database);
if($con==false){
    echo 'error'.$mysqli_connct_error();
    exit;
}
$sqlq="select*from`categories`";
$consql=mysqli_query($con,$sqlq);
$reslut=mysqli_fetch_all($consql,MYSQLI_ASSOC);

// echo"<pre>";
//     print_r($reslut);
   
//     echo"</pre>";

// $sqlinsrt="INSERT INTO `categories`(`name`,`description`)
// VALUES('aliooo','fromphp') ";
// $consql2=mysqli_query($con,$sqlinsrt);
// $affecterow=mysqli_affected_rows($con);
// if($affecterow>=1){
//     echo "done";
// }




?>
