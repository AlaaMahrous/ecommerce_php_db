<?php

include "../connect.php";

$username = filterRequest("username");
$password = sha1("password");
$email = filterRequest("email");
$phone = filterRequest("phone");
$verfiycode     = "0";

$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ? OR user_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
} else {

    $data = array(
        "user_name" => $username,
        "user_password" =>  $password,
        "user_email" => $email,
        "user_phone" => $phone,
        "user_verfiycode" => "0",
    );
    insertData("users" , $data) ; 

}