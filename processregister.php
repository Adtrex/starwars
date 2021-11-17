<?php

include_once('db/dbConnection.php');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password_hashed = password_hash($password,PASSWORD_DEFAULT);

    $query_insert = "
            INSERT INTO `users`(`id`, `name`, `email`, `password`) 
            VALUES (NULL, '".$name."', '".$email."', '".$password_hashed."')            
        ";
    $result_insert = $conn->query($query_insert);

    if($result_insert){
        echo "saved";
    }else{
        echo "failed";
    }

}

?>