<?php
session_start();
require 'database.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$sql = "SELECT * FROM user_table where username = '".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <style>
        body{ 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4; 
            padding: 40px; 
            text-align: center; 
        }
        .container{ 
            max-width: 600px; 
            margin: 0 auto; 
            background: #fff; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        .details{
            display:block;
            width: 400px;
            max-width: 100%;
            min-height: 100px;
            margin: 2rem auto;
            padding: 3rem 4rem;
            border-radius: 2px;
            background-color: #3c0000;
            color: #ffffff;
            font-family: Georgia, 'Times New Roman', serif;
            font-size: 15px;
            line-height: 1.8;
        }
        .dashboardcard{ 
            background: white; 
            padding: 30px; 
            display: inline-block; 
            border-radius: 8px; 
        }
        .logoutbtn{ 
            display: inline-block; 
            margin-top: 20px; color: #ff3333; 
            text-decoration: none; 
            font-weight: bold; 
        }
        .logoutbtn:hover{ 
            text-decoration: underline; 
        }
        .btn-change {
            display: inline-block;
            margin-top: 16px;
            padding: 10px 28px;
            background-color: #F57C00;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.2s;
        }
        .btn-change:hover {
            background-color: #E65100;
        }
    </style>
</head>
<body>
    <div class="dashboardcard">
        <h1>Welcome back, <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>!</h1>
        <a href="change_password.php" class="btn-change">Change Password</a>
        <div class = "container">
            <div class = "details">
                <p>Your Details:</p>
                <p>Birthday: <?php echo $row['birthday']; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <p>Contact Number: <?php echo $row['contact_number']; ?></p>
            </div>
        </div>
        <a href="logout.php" class="logoutbtn">Logout</a>
    </div>

</body>
</html>