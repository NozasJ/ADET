<?php 
session_start();
if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit;
}
require('backend.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="top">
        <h2>Registration</h2>
        <a href="login.php">Return</a>
    </div>
    <?php if ($message): ?>
        <div class="alert <?= $type ?>">
            <?= $message ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <form action="login.php" method="post">

            <label>First Name</label>
            <input type="text" name="first_name">

            <label>Middle Name</label>
            <input type="text" name="middle_name">

            <label>Last Name</label>
            <input type="text" name="last_name ">

            <label>Username</label>
            <input type="text" name="username">

            <label>Password</label>
            <input type="password" name="password">

            <label>Confirm Password</label>
            <input type="password" name="confirm_password">

            <label>Birthday</label>
            <input type="text" name="birthday">

            <label>Email</label>
            <input type="email" name="email">

            <label>Contact Number</label>
            <input type="text" name="contact_number">

            <button type="submit" name="submit">Save</button>
        </form>
    </div>
    
</body>
</html>