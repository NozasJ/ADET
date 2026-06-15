<?php 
    session_start();
    if(isset($_POST['submit'])){
        $color1= $_POST['color1'];
        $color2 = $_POST['color2'];
        $color3 = $_POST['color3'];
        $color4 = $_POST['color4'];
        $color5 = $_POST['color5'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body{
            margin: 0;
            padding: 40px 20px;
            background: linear-gradient(135deg, #f1f5f9 0%, #cbd5e1 100%);
            font-family: sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center; 
            box-sizing: border-box;
        }
        .container{
            background-color: #ffffff;
            width: 100%;
            max-width: 500px; 
            padding: 5%;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }
        h1{
            font-size: 25pt;
            color: #0f172a;
            margin-top: 0;
            font-weight: 700;
            letter-spacing: -0.025em;
        }
        p{
            color: #64748b;
            font-size: 12pt;
            margin-bottom: 10%;
        }
        ul{
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        li{
            display: flex;
            align-items: center;
            padding: 5%;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            font-weight: 600;
            font-size: 12pt;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        li::before {
            content: "";
            width: 16px;
            height: 16px;
            border-radius: 50%;
            margin-right: 12px;
            background-color: currentColor; 
            border: 2px solid rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class = "container">
        <h1>Results of your favorite colors!</h1>
        <p> Colors:</p>
        <ul>
            <li style="color: <?= $color1 ?>;">Color 1: <?= $color1 ?></li>
            <li style="color: <?= $color2 ?>;">Color 2: <?= $color2 ?></li>
            <li style="color: <?= $color3 ?>;">Color 3: <?= $color3 ?></li>
            <li style="color: <?= $color4 ?>;">Color 4: <?= $color4 ?></li>
            <li style="color: <?= $color5 ?>;">Color 5: <?= $color5 ?></li>
        </ul>
        <?php 
            header("Refresh: 10; url=favecolor.php");
            exit();
        ?>
    </div>
</body>
</html>