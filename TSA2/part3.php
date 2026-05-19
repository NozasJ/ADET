<html>
    <head>
        <title>Part 3</title>
    </head>
    <style>
        .body{
            background-color: rgb(230, 230, 230);
        }
        .container{
            background-color: white;
            padding: 40px;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }
        .line{
            width: 100%;
            height: 0.3%;
            background-color: gray;
            padding: 2px;
        }
        .skill{
            display: inline-block;
            background: wheat;
            color:oklch(from color l c h);
            padding: 8px 12px;
            border-radius: 20px;
            margin: 6px;
            font-size: 14px;
        }
    </style>
    <body>
        <div class="container">
            <?php include('include/top.php');?>
            <?php include('include/skills.php');?>
            <?php include('include/education.php');?>
            <?php include('include/contact.php');?>
        </div>
    </body>
</html>