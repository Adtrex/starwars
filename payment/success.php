<?php
session_start();
include_once('../db/dbConnection.php');

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_41362abfb97808b7dae9a3b37de2f9304d699d98",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value

  $email = $_SESSION['email'];

  $query_insert = "
            INSERT INTO `payment`(`id`, `email`, `reference`) 
            VALUES (NULL, '".$email."', '".$reference."')            
        ";
    $pay_inserted = $conn->query($query_insert);

    if($pay_inserted){
        header("Location: /dashboard");
    }else{
        echo "Not Completed";
    }

}
  
