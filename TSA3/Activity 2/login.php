<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit;
}

require('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "SELECT * FROM user_table where username = '".$_POST['username']."' and password = '".$_POST['password']."'";
    $result = mysqli_query($conn, $sql);

    

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: home.php');
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php if (isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>
    <div class = "container">
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="registration.php">Register here</a>.</p>
    </form>
    </div>
</body>
</html>