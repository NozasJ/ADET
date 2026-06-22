<?php
    $fname = "John Benedict";
    $mname = "Ibita";
    $lname = "Sazon";

    setcookie("firstname", $fname, time()+10);
    setcookie("middlename", $mname, time()+20);
    setcookie("lastname", $lname, time()+30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>

        body {
            display: flex;
            font-family: sans-serif;
            margin: 0;
            min-height: 100vh;
            background: rgba(0, 70, 29, 0.8);
            justify-content: center;
            align-items: center;
            color: var(--text-main);
        }
        .container {
            max-width: 420px;
            width: 90%;
            background: rgba(255, 255, 255, 0.95);
            padding: 35px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(10px);
        }
        h2 {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--primary);
            margin: 0 0 8px 0;
            font-weight: 700;
        }
        h3 {
            font-size: 1.5rem;
            margin: 0 0 25px 0;
            color: #111827;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>COOKIES</h2>
    <h3>My name in cookies!</h3>
        <strong> Cookie 1: </strong> <?= isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : 'Blank' ?> <br>
        <strong> Cookie 2: </strong> <?= isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : 'Blank' ?> <br>
        <strong> Cookie 3: </strong> <?= isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : 'Blank' ?> <br>
</div>
</body>
</html>