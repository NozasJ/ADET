<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100;
    background-color: #fff;
    padding: 40px;
    margin: 50px auto;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border: 1px solid #eee;
    border-radius: 2px;
    padding: 20px;
}
button{
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 30px;
}
button:hover{
    background-color: #0056b3;
}
</style>
<body>
    <div class = "container">
        <h1> Formative 2 Project 3: Looping </h1>
        <p> Name: John Benedict I. Sazon </p> <p> Date: May 4, 2026 </p>
        <?php
        for ($i = 0; $i <=99; $i++){
            echo sprintf("%02d", $i);
            echo ", ";
        }
        ?>
        <a href = "index.php"><button> BACK</button></a>
    </div>
</body>
</html>