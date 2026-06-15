<?php
    $fname = "John Benedict";
    $mname = "pogi";
    $lname = "nozas";

    setcookie("firstname", $fname, time()+10);
    setcookie("middlename", $mname, time()+20);
    setcookie("lastname", $lname, time()+30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Personal Information Webpage</h2>
    <p>Cookies have been set! Watch below as they are retrieved at 10, 20, and 30 seconds.</p>
        <super> Cookie 1: </super> <?= $_COOKIE['firstname']?> <br>
        <super> Cookie 2: </super> <?= $_COOKIE['middlename']?> <br>
        <super> Cookie 3: </super> <?= $_COOKIE['lastname']?> <br>
</div>
</html>