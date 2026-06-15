<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Post_Sazon</title>
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
                $errors = [];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $dob = $_POST['dob'];
                $add = $_POST['add'];
                
                if(!preg_match("/^[a-zA-Z]+$/", $fname)){
                    $errors[] = "First name must contain only letters.";
                }
                if(!preg_match("/^[a-zA-Z]+$/", $mname)){  
                    $errors[] = "Middle name must contain only letters.";
                }
                if(!preg_match("/^[a-zA-Z]+$/", $lname)){
                    $errors[] = "Last name must contain only letters.";
                }
                if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob)){
                    $errors[] = "Date of birth must be in the format YYYY-MM-DD.";
                }
                if(empty($add)){
                    $errors[] = "Address cannot be empty.";
                }
                if(!empty($errors)){
                    echo "<div class='errors' style='color: red; margin-top: 20px;'>";
                    foreach ($errors as $error){
                        echo "<p>$error</p>";
                    }
                    echo "</div>";
                } 
                else{
                    echo "<p><strong>First Name:</strong> $fname</p>";
                    echo "<p><strong>Middle Name:</strong> $mname</p>";
                    echo "<p><strong>Last Name:</strong> $lname</p>";
                    echo "<p><strong>Date of Birth:</strong> $dob</p>";
                    echo "<p><strong>Address:</strong> $add</p>";
                } 
            } 
        ?>
    </div>
</body>
</html>