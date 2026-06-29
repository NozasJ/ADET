<?php
$submitted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname  = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname   = $_POST["lastname"];
    $username   = $_POST["username"];
    $password   = $_POST["password"];
    $confirmp    = $_POST["confirm_password"];
    $birthday   = $_POST["birthday"];
    $email      = $_POST["email"];
    $contact    = $_POST["contact"];

    if ($password !== $confirmp) {
        $error = "Password and Confirm Password are not the same.";
    } else {
        $submitted = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Module</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="card">
    <h2>Registration</h2>
    <form method="POST">
      <div class="formItems">
        <label>First Name</label>
        <input type="text" name="firstname">
      </div>
      <div class="formItems">
        <label>Middle Name</label>
        <input type="text" name="middlename">
      </div>
      <div class="formItems">
        <label>Last Name</label>
        <input type="text" name="lastname">
      </div>
      <div class="formItems">
        <label>Username</label>
        <input type="text" name="username">
      </div>
      <div class="formItems">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="formItems">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password">
      </div>
      <div class="formItems">
        <label>Birthday</label>
        <input type="text" name="birthday">
      </div>
      <div class="formItems">
        <label>Email</label>
        <input type="email" name="email">
      </div>
      <div class="formItems">
        <label>Contact Number</label>
        <input type="text" name="contact">
      </div>
      <div class="form-actions">
        <button type="submit">Submit</button>
      </div>

    </form>
  </div>

  <?php if (!empty($error)): ?>
  <div class="error-box">
    <?php echo ($error); ?>
  </div>
  <?php endif; ?>

  <?php if ($submitted): ?>
  <div class="result-card">
    <h3>Registration Result</h3>
    <table class="result-table">
      <tr><td>First Name</td><td><?php echo ($firstname); ?></td></tr>
      <tr><td>Middle Name</td><td><?php echo ($middlename); ?></td></tr>
      <tr><td>Last Name</td><td><?php echo ($lastname); ?></td></tr>
      <tr><td>Username</td><td><?php echo ($username); ?></td></tr>
      <tr><td>Password</td><td><?php echo ($password); ?></td></tr>
      <tr><td>Birthday</td><td><?php echo ($birthday); ?></td></tr>
      <tr><td>Email</td><td><?php echo ($email); ?></td></tr>
      <tr><td>Contact Number</td><td><?php echo ($contact); ?></td></tr>
    </table>
  </div>
  <?php endif; ?>

</body>
</html>