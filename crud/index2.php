
<?php
if(isset($_POST['submit'])){
    $name=htmlspecialchars(trim($_POST['name1'])) ;
    $descr=htmlspecialchars(trim($_POST['descr1']));
echo "<h3> $name<?h3>";
echo "<h3> $descr<?h3>";

}else{
    echo "<h3> click submit<?h3>";
}
?>
