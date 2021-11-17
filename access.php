<?php
session_start();
include_once('db/dbConnection.php');
//Code to see if Table Exists

$email = $_SESSION['email'];
$query = "SELECT * FROM payment WHERE email='$email'";
$result = $conn->query($query);

$row = $result->fetch_assoc();




