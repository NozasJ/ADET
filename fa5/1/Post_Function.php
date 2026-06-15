<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Get_Sazon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "container">
        <form action ="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
        <label>
            First Name <input type="text" name="fname" placeholder="Enter your first name">
        </label>
        <label>
            Middle Name <input type="text" name="mname" placeholder="Enter your middle name">
        </label>
        <label>
            Last Name <input type="text" name="lname" placeholder="Enter your last name">
        </label>
        <label>
            Date of Birth <input type="text" name="dob" placeholder="Enter your date of birth">
        </label>
        <label>
            Address <input type="text" name="add" placeholder="Enter your address">
        </label>
            <input type ="submit" name="submit" value="Submit">
        </form>
        <?php
            if (isset($_POST['submit'])){
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $dob = $_POST['dob'];
                $add = $_POST['add'];

                echo "<p><strong>First Name:</strong> $fname</p>";
                echo "<p><strong>Middle Name:</strong> $mname</p>";
                echo "<p><strong>Last Name:</strong> $lname</p>";
                echo "<p><strong>Date of Birth:</strong> $dob</p>";
                echo "<p><strong>Address:</strong> $add</p>";
            }
        ?>
    </div>
</body>
</html>