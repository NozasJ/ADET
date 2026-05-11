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
}
button{
    background-color: #007BFF;
    color: white;
    width: 200px;
    height: 50px;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 20px;
    margin: 20px;
}
button:hover{
    background-color: #0056b3;
}

</style>
<body>
    <div class = "container">
        <h1> FORMATIVE 2 PROJECTS </h1>
        <a href = "MetricConver.php"><button> 1. Metric Conversion</button></a>
        <a href = "gradeRank.php"><button> 2. Grade Ranking</button></a>
        <a href = "Numbers.php"><button> 3. Looping</button></a>
    </div>
</body>
</html>