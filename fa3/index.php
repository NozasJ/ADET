<html>
<head>
    <title>Main</title> 
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .container{
        display: flex;
        flex-direction: column;
        width: 100vw;
        height: 100vh;
        background-color: rgb(6, 65, 0);   
        justify-content: center;
        align-items: center;

    }
    .header{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        font-weight: bold;
        background-color: #efefef;
        color: rgb(6, 65, 0);
        height: 20%;
        width: 55%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin-top: 20px; 
        border-radius: 10px;
        border: 2px solid #333;
    }
    .main{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 20px;
        flex-grow: 1;
        background-color: #efefef;
        align-items: center;
        justify-items: center;
        width: 50%;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        border: 2px solid #333;
    }
    .footer{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #ffffff;
        color: #333;
        height: 10%;
        width: 100%;
        font-size: 0.8rem;
        box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
    }
    .button{
        background-color: white;
        padding: 30px;
        border-radius: 40px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        width: 70%; 
        text-align: center;
    }
    .button:hover{
        background-color: #f0f0f0;
        cursor: pointer;
        margin-top: -5px;
        transition: width 0.3s ease;
        text-align: center;
    }
    .press{
    text-decoration: none;
    color: inherit;
    width: 80%;
    display: block;
    }
    

</style>
<body>
    <div class="container">
        <div class="header">Formative Assessment 3</div>
            <div class="main"> 
                <a href = "part1.php" class = "press"><div class="button">Project 1</div></a>
                <a href = "part2.php" class = "press"><div class="button">Project 2</div></a>
                <a href = "part3.php" class = "press"><div class="button">Project 3</div></a>
            </div>
        <div class="footer">John Benedict I. Sazon @ 2026</div>
    </div>
</body>
</html>