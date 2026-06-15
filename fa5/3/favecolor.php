<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Color</title>
    <style>
        body{
            margin: 0;
            padding: 40px 20px;
            background-color: #d1d5db; 
            display: flex;
            justify-content: center;
            align-items: flex-start; 
        }
        p{
            text-align: justify;
            line-height: 1.6; 
            color: #374151;
            font-size: 12pt;
        }
        .container form{
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            width: 100%;
        }
        label{
            display: flex;
            flex-direction: column;
            gap: 2vh; 
            font-size: 14px;
            font-weight: bold;
            color: #2a2a2a;
            font-family: Arial, sans-serif;
        }
        input[type="text"]{
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            font-size: 12px;
            width: 100%;
            box-sizing: border-box; 
        }
        input[type="submit"]{
            margin-top: 5%;
            padding: 12px;
            background-color: #1e293b;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container{
            display: flex;
            flex-direction: column;
            background-color: white;
            width: 100%;
            max-width: 550px; 
            min-height: 500px; 
            padding: 2%;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);  
            border-radius: 2px;
        }
        .message{
            background-color:rgb(246, 255, 146);
            border:rgb(246, 255, 146);
        }
    </style>
</head>
<body>
    <div class = "container">
        <form action ="resultcolor.php" method = "post">
        <label>
            First favorite color <input type="text" name="color1" placeholder="Enter your first favorite color">
        </label>
        <label>
            Second favorite color <input type="text" name="color2" placeholder="Enter your second favorite color">
        </label>
        <label>
            Third favorite color <input type="text" name="color3" placeholder="Enter your third favorite color">
        </label>
        <label>
            Fourth favorite color <input type="text" name="color4" placeholder="Enter your fourth favorite color">
        </label>
        <label>
            Fifth favorite color <input type="text" name="color5" placeholder="Enter your fifth favorite color">
        </label>
            <input type ="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>