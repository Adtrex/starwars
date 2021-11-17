<?php
session_start();

include_once('db/dbConnection.php');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $passwordfromDB = $row['password'];


    $passwordverified = password_verify($password, $passwordfromDB);

	if($passwordverified){
        $_SESSION['email'] = $row['email'];

        header("Location: payment.php");
        
    }else{
        echo "wrong password";
    }

    
    

    

}

?>