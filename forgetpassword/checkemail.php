<?php

include "../connect.php";

$email = filterRequest("email");
$verfiycode     = rand(10000 , 99999);

$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ?");
$stmt->execute(array($email));
$count = $stmt->rowCount();

if($count > 0){
    $data = array("user_verfiycode" => $verfiycode );
    updateData("users", $data , "user_email = '$email");
    //sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 
}

