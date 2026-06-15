<?php 
    session_start();
    if(isset($_POST['submit'])){
        $_SESSION['color1'] = $_POST['color1'];
        $_SESSION['color2'] = $_POST['color2'];
        $_SESSION['color3'] = $_POST['color3'];
        $_SESSION['color4'] = $_POST['color4'];
        $_SESSION['color5'] = $_POST['color5'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link ref = "stylesheet" href = "style.css">
</head>
<body>
    <div class = "container">

    </div>
</body>
</html>