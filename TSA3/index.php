<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 20px;
        }

        .menucard {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: #333;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .menucard:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="Activity 1/registration.php" class="menucard">
            <div style="font-size: 36px;"></div>
            <div style="font-size: 16px; font-weight: 500;">Part 1: A</div>
            <div style="font-size: 12px; color: #888; font-family: Arial, sans-serif;">Go to registration page</div>
        </a>
          <a href="Activity 1/login.php" class="menucard">
            <div style="font-size: 36px;"></div>
            <div style="font-size: 16px; font-weight: 500;">Part 1: B</div>
            <div style="font-size: 12px; color: #888; font-family: Arial, sans-serif;">Go to login page</div>
        </a>

        <a href="Activity 2/login.php" class="menucard">
            <div style="font-size: 36px;"></div>
            <div style="font-size: 16px; font-weight: 500;">Part 2</div>
            <div style="font-size: 12px; color: #888; font-family: Arial, sans-serif;">Go to login page</div>
        </a>
    </div>
</body>
</html>