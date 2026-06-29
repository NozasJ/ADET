<?php
session_start();
require 'database.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($new !== $confirm) {
        $message = 'New password and confirmation do not match.';
    } else {
        $sql = "SELECT password FROM user_table WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION['username']) . "'";
        $res = mysqli_query($conn, $sql);
        if ($res && mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            if ($row['password'] !== $current) {
                $message = 'Current password is incorrect.';
            } else {
                $update = "UPDATE user_table SET password = '" . $new . "' WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION['username']) . "'";
                if (mysqli_query($conn, $update)) {
                    $message = 'Password updated successfully.';
                } else {
                    $message = 'Error updating password: ' . mysqli_error($conn);
                }
            }
        } else {
            $message = 'User not found.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        .form-card{ 
            max-width:420px;
            margin:60px auto;
            padding:24px;
            background:#fff;
            border-radius:8px;
            box-shadow:0 4px 12px rgba(0,0,0,.08); 
        }
        label{
            display:block;
            margin-bottom:6px;
            font-weight:600
        }
        input[type=password]{
            width:100%;
            padding:8px;
            margin-bottom:12px;
            border:1px solid #ccc;
            border-radius:4px
        }
        .btn{
            display:inline-block;
            padding:8px 14px;
            background:#3c0000;
            color:#fff;
            border-radius:4px;
            text-decoration:none;
            border:none
        }
        .msg{
            margin-bottom:12px;
            color:#c00
        }
        .successmsg{
            margin-bottom:12px;
            color:#00c000
        }
        .btn-home {
            display: inline-block;
            margin-top: 16px;
            padding: 10px 28px;
            background-color: transparent;
            color: #003023;
            text-decoration: none;
            border: 2px solid #003023;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            transition: all 0.2s;
        }
        .btn-home:hover {
            background-color: #003121;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Change Password</h2>
        <?php if ($message): 
            if ($message == 'Password updated successfully.'): ?>
                <div class="successmsg">
                    <?php echo $message; ?>
                </div>
            <?php else: ?>
                <div class="msg">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <form method="post" action="">
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password" required>

            <label for="new_password">New Password</label>
            <input type="password" name="new_password" id="new_password" required>

            <label for="confirm_password">Confirm New Password</label>
            <input type="password" name="confirm_password" id="confirm_password" required>

            <button type="submit" class="btn">Update Password</button>
        </form>
        <p style="margin-top:12px;"><a href="home.php" class="btn-home">Back to Home</a></p>
    </div>
</body>
</html>
