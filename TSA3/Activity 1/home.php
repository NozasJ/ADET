<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4; 
            padding: 40px; 
            text-align: center; 
        }
        .dashboardcard { 
            background: white; 
            padding: 30px; 
            display: inline-block; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        .logoutbtn { 
            display: inline-block; 
            margin-top: 20px; color: #ff3333; 
            text-decoration: none; 
            font-weight: bold; 
        }
        .logoutbtn:hover { 
            text-decoration: underline; 
        }
    </style>
</head>
<body>

    <div class="dashboardcard">
        <h1>Welcome back, <?php echo ($_SESSION['username']); ?>!</h1>
        <p>You have successfully logged into the secured system.</p>
        
        <a href="logout.php" class="logoutbtn">Logout</a>
    </div>

</body>
</html>