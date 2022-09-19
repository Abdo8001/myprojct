<?php
include 'connct.php';
    if(isset($_POST['submit'])){
        $name=htmlspecialchars(trim($_POST['name'])) ;
        $descr=htmlspecialchars(trim($_POST['description']));
        $id=$_POST['id'];
        $errors=[];
                if(empty($name)){
                    $errors[]='name should not be empty';

                    }elseif (strlen($name)<3){
                    $errors[]='name should not be less than 3 letters';

                    }if(empty($descr)){
                    $errors[]='description should not be empty';
                    // "UPDATE `categories` 
                    // SET `name` = '$name', `description` = '$description'
                    // WHERE `id` = '$id'";
                    }if(empty($errors)){
                    $quey=" UPDATE`admin`set`name`='$name',`email`='$descr'where `admin_id`='$id';";
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