<?php
require('database.php');
$message = "";
$type = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $breed = mysqli_real_escape_string($conn, $_POST['breed']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $color = mysqli_real_escape_string($conn, $_POST['color']);
    $height = (int)mysqli_real_escape_string($conn, $_POST['height']);
    $weight = (int)mysqli_real_escape_string($conn, $_POST['weight']);

    $sql = "INSERT INTO dog_records(name, breed, age, address, color, height, weight)
        VALUES (
            '$name',
            '$breed',
            '$age',
            '$address',
            '$color',
            $height,
            $weight
        )";

    if(mysqli_query($conn, $sql)) {
        $message = "Registration completed successfully...";
        $type = "success";
    } else {
        $message = "Registration error: " . mysqli_error($conn);
        $type = "error";
    }
}

?>