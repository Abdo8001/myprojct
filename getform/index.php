<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php
include 'connctu.php';

$updatq="INSERT INTO `categories`(`name`,`description`) VALUES('ahmade','fantasy')";
$consql=mysqli_query($con,$updatq);

$affecterow=mysqli_affected_rows($con);

?>
<div class="container">
<form action="add.php" method="Post">
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" name="name1">
  </div>
 
  <div class="mb-3">
    <label for="name" class="form-label">description</label>
    <input type="text" class="form-control" name="descr1">
  </div>
 
  <button type="submit"name="submit" class="btn btn-primary">Submit</button>
</form>
</div>