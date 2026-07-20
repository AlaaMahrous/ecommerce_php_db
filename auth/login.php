<?php

include "../connect.php";

$password = sha1($_POST['password']);
$email = filterRequest("email");

$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ? And user_password = ? ");
$stmt->execute(array($email, $password));
$count = $stmt->rowCount();

result($count);