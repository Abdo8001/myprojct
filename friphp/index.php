<!--  -->
<!-- < -->
<?php
$arr=[
    ["ali","ahmad","mohy"]
,["mohmed","hoda","mona"]
];
for($i=0;$i<count($arr);$i++){
for($j=0;$j<count($arr);$j++){
    echo $arr[$i][$j];
    echo "<br>";
}

}
?> -->
<?php
$calc=(int)readline('Enter an integer: ');;
$num1=200;
$num2=150;
if($calc==2){
echo $num1+$num2;
}elseif($calc==3){
 echo  $num1*$num2;
}elseif($calc==4){
    echo $num1/$num2;
}
else
echo $num1-$num2;



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Answer</title>
</head>
<body>
<p>The answer is: 
<?php
$first = $_POST['first'];
$second= $_POST['second'];

if($_POST['group1'] == add) {
echo "$first + $second";
}
else if($_POST['group1'] == subtract) {
echo "$first - $second";
}
else if($_POST['group1'] == times) {
echo "$first * $second";
}
else($_POST['group1'] == divide) {
echo "$first / $second";
}
?>
</p> 
</body>
</html>






















