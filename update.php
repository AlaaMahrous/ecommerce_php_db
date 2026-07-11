<?php

include "connect.php";

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];

$sql = "UPDATE products
        SET name='$name', price='$price'
        WHERE id='$id'";

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