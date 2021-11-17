<?php
//session_start();

//setting variables for offline and online respectively
if (!checkdnsrr($_SERVER['SERVER_NAME'], 'NS')){
    //echo "Website is OFFLINE";
    $conn = mysqli_connect("us-cdbr-east-04.cleardb.com","b1b8f2d5478ff7","0d48068f","heroku_2c9e890d14d9800");
}else{
    //echo "ONLINE ONLINE ONLINE";
    $conn = mysqli_connect("us-cdbr-east-04.cleardb.com","b1b8f2d5478ff7","0d48068f","heroku_2c9e890d14d9800");
}


// Check connection
if (mysqli_connect_errno()){
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}//else{
//echo "COnnected Succefully";
//exit();
//} 
  
  
  
  
?>