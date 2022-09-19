
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php
// session_start();
// print_r($_SESSION['test2']);
// if(isset($_POST['submit'])){
//     $name=htmlspecialchars(trim($_POST['name1'])) ;
//     $descr=htmlspecialchars(trim($_POST['descr1']));
// echo "<h3> $name<?h3>";
// echo "<h3> $descr<?h3>";

// }else{
//     echo "<h3> click submit<?h3>";
// }

?> 
<div class="container">
<form action="index2.php" method="Post">
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