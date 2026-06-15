<html>
    <head>
        <title> Part 1 </title>
    </head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: #b3b3b3;
    }
    p{
        text-align: justify;
    }
    .container{
        display: grid;
        grid-gap: 0px 20px;
        min-height: 100vh;
        grid-template-rows: auto 1fr auto;
        grid-template-areas: "head head head head head"
                             "main main main main main"
                             "foot foot foot foot foot";                
    }
    #header{
        grid-area: head;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 50px;
        background-color: #1d1d1d;
        height: 20vh;
        box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        border: 2px solid rgba(0,0,0,0.1);
        color: white;
        font-size: 30pt;
    }
    #main{
        grid-area: main;
        background-color: #262626;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    #foot{
        grid-area: foot;
        background-color: #390000;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        height: 10vh;
        box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        border: 2px solid rgba(0,0,0,0.1);
    }
    .card{
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #444;
        padding: 20px;
        border-radius: 8px;
        height: 50vh;
        width: 15vw;
        box-shadow: 0 10px 4px rgba(0,0,0,0.1);
        transition: transform 0.5s ease;
    }
    .card:hover{
        background-color: #390000;
        transform: translateY(-15px);
        box-shadow: 0 30px 30px rgba(255, 255, 255, 0.1);
    }
</style>
<body>
    <div class = "container">
        <div id="header">
            <head> <b>STORIES</b> </head>
        </div>
        <div id="main">
            <?php include('include/yssa.php');?>
            <?php include('include/krizz.php');?>
            <?php include('include/mark.php');?>
            <?php include('include/brent.php');?>
            <?php include('include/france.php');?>
        </div>
        <div id="foot">
            <p>© 2026 John Benedict I. Sazon</p>
        </div>
    </div>
</body>
</html>