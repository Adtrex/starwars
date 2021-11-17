<?php
session_start();
include_once('db/dbConnection.php');
//Code to see if Table Exists

$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($query);

$row = $result->fetch_assoc();


//Now to check, we use an if() statement
if(count($row) >= 1) {
    header("Location: /dashboard");
  } else {
    header("Location: payment.php");
}

