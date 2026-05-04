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
    width: 100%;
    max-width: 800px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border: 1px solid #eee;
    border-radius: 2px;
}
.main{
    border: 2px solid #ad477d;
    padding: 40px;
    width: 600px;
    display: flex;
    gap: 20px;
    align-items: flex-start;
}
.info{
    flex: 2;
}
.pic{
    width: 150px;
    height: 150px;
}
.name{
    border: 2px solid #ad477d;
    padding: 10px 15px;
    font-size: 24px;
    margin-bottom: 20px;
    text-align: left;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.stats{
    display: flex;
    gap: 20px;
}
.statbox{
    border: 2px solid #ad477d;
    width: 100px;
    height: 120px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-size: 20px;
    padding: 30px;
    margin-bottom: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.picture{
    border: 2px solid #ad477d;
    flex: 1;
    height: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 22px;
    min-width: 180px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
    <?php
    $grade = 93; 
    if ($grade >= 93) {
        $rank = "A";
        $image = "<img src='A-B.jpg' alt='Good Job!' class='pic'>";
    } 
    elseif ($grade >= 90) {
        $rank = "A-";
        $image = "<img src='A-B.jpg' alt='Good Job!' class='pic'>";
    } 
    elseif ($grade >= 87) {
        $rank = "B+";
        $image = "<img src='A-B.jpg' alt='Good Job!' class='pic'>";
    } 
    elseif ($grade >= 83) {
        $rank = "B";
        $image = "<img src='B-C.jpg' alt='Good Job!' class='pic'>";

    } 
    elseif ($grade >= 80) {
        $rank = "B-";
        $image = "<img src='B-C.jpg' alt='Nice Work!' class='pic'>";
    }
    elseif ($grade >= 77) {
        $rank = "C+";
        $image = "<img src='B-C.jpg' alt='Nice Work!' class='pic'>";
    }
    elseif ($grade >= 73) {
        $rank = "C";
        $image = "<img src='C-D.jpg' alt='Nice Work!' class='pic'>";
    }
    elseif ($grade >= 70) {
        $rank = "C-";
        $image = "<img src='C-D.jpg' alt='Hmm, You can do better!' class='pic'>";
    }
    elseif ($grade >= 67) {
        $rank = "D+";
        $image = "<img src='C-D.jpg' alt='You can do better!' class='pic'>";
    }
    elseif ($grade >= 63) {
        $rank = "D";
        $image = "<img src='D-F.jpg' alt='You can do better!' class='pic'>";
    }
    elseif ($grade >= 60) {
        $rank = "D-";
        $image = "<img src='D-F.jpg' alt='GG' class='pic'>";
    }
    else {
        $rank = "F";
        $image = "<img src='D-F.jpg' alt='GG' class='pic'>";
    }
    ?>
    <div class = "container">
        <div class="main">
        <div class="info">
            <div class="name">
                Name: John Benedict I. Sazon
            </div>
            
            <div class="stats">
                <div class="statbox">
                    Rank: <?php echo $rank; ?>
                </div>
                <div class="statbox">
                    Grade: <?php echo $grade; ?>
                </div>
            </div>
        </div>

        <div class="picture">
            <?php echo $image; ?>
        </div>
    </div>
    <a href = "index.php"><button> BACK</button></a>
    </div>
</body>
</html>