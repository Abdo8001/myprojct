<form  style="position: relative;
  left: 30px;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
  background-color:blue;" action="index.php" method="post">
<input type="number" name="fr-num">
<br>
<input type="number" name="sc-num">
<br>
<input type="submit" >
<select name="u">
  <option value="1">+</option>
  <option value="2">*</option>
  <option value="3">-</option>
  <option value="4">/</option>
</select>

</form>
<?php
$selct=$_POST['u'];
 
 if($selct==1){
    $sum=$_POST["fr-num"]+$_POST["sc-num"];
   echo "<h2>$sum</h2>"; 
 }elseif($selct==2){
    $multi=$_POST["fr-num"]*$_POST["sc-num"]; 
    echo "<h2>$multi</h2>"; 

 }elseif($selct==3){
    $min=$_POST["fr-num"]-$_POST["sc-num"]; 
    echo "<h2>$min</h2>"; 

 }elseif($selct==4&&$_POST["sc-num"]==0){
  
 
  echo"<h2>can not divide on zero</h2>";
}else
$dive=$_POST["fr-num"]/$_POST["sc-num"]; 
echo "<h2> $dive</h2>";

?>
<?php
function oddorevn($varr1){
  if($varr1%2==0){
    echo"even";

  }else
 echo "odd";

 
}
$oddorevn(4);
?>

<?php
function wordswap($word1,$word2){
if()
  str_replace($word1,$word2);

}










