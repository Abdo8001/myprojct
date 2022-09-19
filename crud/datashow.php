<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php
include 'connct.php';
$showquery="select `admin_id`,`name`, `email`from `admin`;";
$result=mysqli_query($conct,$showquery);
$admins=mysqli_fetch_all($result,MYSQLI_ASSOC);
;
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
    <h1 class="my-5">All admins information</h1>
    <a href="add.php" class="btn btn-primary my-2">
            Add a new admin
        </a>
<table class="table" >

<thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col"> Name</th>
                <th scope="col">email</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($admins as $admin) {
                ?>
                <tr>
                    <!-- <th scope="row"></th> -->
                    <td><?= $admin['admin_id'] ?></td>
                    <td><?= $admin['name'] ?></td>
                    <td><?= $admin['email'] ?></td>
                    <td>
                         <a href="edit.php?id=<?= $admin['admin_id'] ?>"  class="btn btn-secondary"> 
                        Edit
                        </a>
                    
                          <a href="delet.php?id=<?= $admin['admin_id'] ?>" class="btn btn-danger"> 
                        Delete
                        </a> 
                    </td>
                </tr>
                <?php
                }
                ?>
                
            </tbody>

</table>

    </div>
</body>
</html>