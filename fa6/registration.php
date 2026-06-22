<?php require('backend.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top">
        <h2>Registration of Dog</h2>
        <a href="index.php">Return</a>
    </div>
    <?php if ($message): ?>
        <div class="alert <?= $type ?>">
            <?= $message ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <form action="registration.php" method="post">
            <h2>Dog Information</h2>

            <label>Name</label>
            <input type="text" name="name">

            <label>Breed</label>
            <input type="text" name="breed">

            <label>Age</label>
            <input type="text" name="age">

            <label>Address</label>
            <input type="text" name="address">

            <label>Color</label>
            <input type="text" name="color">

            <label>Height (ft)</label>
            <input type="text" name="height">

            <label>Weight (kg)</label>
            <input type="text" name="weight">

            <button type="submit" name="submit">Save</button>
        </form>
    </div>
    
</body>
</html>