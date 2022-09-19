<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container"> 
  <?php
  if(isset($_SESSION['sucss'])){
echo "<div class='alert alert-primary'>" .$_SESSION['sucss']."</div>";
unset($_SESSION['success']);

  }elseif(isset($_SESSION['errors'])) {
    ?>
    <div class="alert alert-danger">
        <ul>
        <?php
        foreach($_SESSION['errors'] as $error) {
            echo "<li>$error</li>";
        }
        unset($_SESSION['errors']);
        ?>
        </ul>
    </div>
    
    <?php
    }
    ?>
 
  <!-- ?>   -->
  <form action="upload.php"method="post" enctype="multipart/form-data">
<input type="file" name="image" id="">
<input type="submit" name="submit"value="Upload Image" id="">

    </form></div>
</body>
</html>