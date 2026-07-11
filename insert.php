<?php

include "connect.php";

$name = $_POST["name"];
$price = $_POST["price"];

$sql = "INSERT INTO products(name, price)
        VALUES('$name', '$price')";

if (mysqli_query($conn, $sql)) {
    echo json_encode([
        "status" => "success"
    ]);
} else {
    echo json_encode([
        "status" => "failed"
    ]);
}

?>