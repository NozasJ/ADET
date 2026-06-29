<?php
require('database.php');
$message = "";
$type = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);

    if ($password !== $confirm_password) {
        $message = "Password and Confirm Password do not match.";
        $type = "error";
    } 
    else {
       $sql = "INSERT INTO user_table(first_name, middle_name, last_name, username, password, birthday, email, contact_number)
        VALUES (
            '$first_name',
            '$middle_name',
            '$last_name',
            '$username',
            '$password',
            '$birthday',
            '$email',
            '$contact_number'
        )";

        if(mysqli_query($conn, $sql)) {
            $message = "Registration completed successfully...";
            $type = "success";
        } 
        else {
            $message = "Registration error: " . mysqli_error($conn);
            $type = "error";
        }
    }
}

?>