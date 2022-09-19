<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
<body>  
<div class="bg-primary text-light font-weight-bold">
        
<?php
$arra=["red","green","blue","black","white"];
for($i=0;$i<count($arra);$i++){
echo "<ul><li>$arra[$i]</li></ul>";
echo"<br>";

}


?>
</div>
<div class="bg-info text-light font-weight-bold">
    <?php
    $number=[1,1,2,2,3,4,5,5];
    echo"unduplicate array";
    echo"<br>";
        // echo array_unique($number[$j]);
        print_r(array_unique($number));
    

    
    ?>
</div>
<table class="table table-bordered table-dark">
<?php

$employees = [["mohamed ali","mohamad@eraasoft.com","01024256993",2500],
["reham mohamad","reham@eraasoft.com","01122255448",3000],
["maged hesham","maged@eraasoft.com","01024213361",4000],
["ali mahmoud","ali@eraasoft.com","01142547485",2000],
];
echo"<th>names </th>";
    echo"<th>email </th>";
    echo"<th>phone </th>";
    echo"<th>salary </th>";
for($x=0;$x<count($employees);$x++){
    echo('<tr>');
for($k=0;$k<count($employees);$k++){
 
    
    echo('<td>' . $employees[$x][$k] . '</td>');
    // echo('<td>' . $employees[$x][1] . '</td>');
    // echo('<td>' . $employees[$x][2] . '</td>');




}
echo('</tr>');

}
?>
</table>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

<?php
$arra1=['whight','black'];
array_push($arra1,'red','green');

print_r $arra1;
?>
<?php
function arraypuch($color){
    $arraycolor=['wight','black'];
    array_push($arra1,$color);
return print_r $arraycolor;

}
$arraypuch('red');











