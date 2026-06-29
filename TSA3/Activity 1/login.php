<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit;
}

function validate($username, $password) {
    static $statUsername = 'NozasJ';
    static $statPass = '123';

    return $username === $statUsername && $password === $statPass;
}

$savedUsername = $_COOKIE['username'] ??'';
$savedPassword = $_COOKIE['password'] ?? '';
$rememberMe    = isset($_COOKIE['username']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    if (validate($username, $password)) {
   
        $_SESSION['username'] = $username;

        if ($remember) {
            setcookie('username', $username, time() + (86400 * 30));
            setcookie('password', $password, time() + (86400 * 30));
        } else {
            setcookie('username', '', time() - 3600);
            setcookie('password', '', time() - 3600);
        }

        header('Location: home.php');
        exit;
    } else {
        $savedUsername = $username;
        $savedPassword = $password;
        $rememberMe    = $remember;
    }
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

  <div class="card">

    <form action="login.php" method="POST">
      <div class="formItems">
        <label>Username</label>
        <input type="text" name="username"
               value="<?php echo $savedUsername; ?>">
      </div>
      <div class="formItems">
        <label>Password</label>
        <input type="password" name="password"
               value="<?php echo $savedPassword; ?>">
      </div>
      <div class="form-actions">
        <label class="remember-label">
          <input type="checkbox" name="remember"
                 <?php echo $rememberMe ? 'checked' : ''; ?>>
          Remember Me
        </label>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>