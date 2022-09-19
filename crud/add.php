<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php
include 'connct.php';
    if(isset($_POST['submit'])){
        $name=htmlspecialchars(trim($_POST['name1'])) ;
        $descr=htmlspecialchars(trim($_POST['descr1']));
        $errors=[];
                if(empty($name)){
                    $errors[]='name should not be empty';

                    }elseif (strlen($name)<3){
                    $errors[]='name should not be less than 3 letters';

                    }if(empty($descr)){
                    $errors[]='description should not be empty';

                    }if(empty($errors)){
                    $quey=" INSERT INTO `admin`(`name`,`email`)
                    values('$name','$descr') ";
                    $result=mysqli_query($conct,$quey);
                    $rowas=mysqli_affected_rows($conct);
                   header("location:datashow.php");
                    // if($rowas>=1){
                    //     echo "<div class='alert alert-primary'>
                    //     name added successfully
                    //     </div>";
                   // }
                    }else{
                    ?>


                        <div class="container">
                            <div class="alert alert-danger">
                                <ul>
                                <?php

                                    foreach($errors as $error) {
                                        echo "<li>$error</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>

                        <?php
                         }
            
            }else{
        header("Location:index.php");
        exit;
    }
    ?>