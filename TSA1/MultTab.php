<html>
    <head>
        <title>Multiplication Table</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-color: rgb(247, 247, 247);
                height: 100vh;
            }
            .container{
                background-color: white;
                padding: 40px;
                max-width: 35%;
                margin: 50px auto;
                border-radius: 4px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .container-grid{
                margin-top: 30px;
                max-width: 95vh;
                display: grid;
                grid-template-columns: repeat(11, 1fr);
                aspect-ratio: 1/1;
                border: 1px solid #eee;
            }
            .header {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-weight: bold;
            }
            .line{
                margin-top: 20px;
                width: 100%;
                height: 0.1%;
                background-color: #683805;
                padding: 2px;
            }
            .cell{
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.2rem;
                font-weight: 500;
                margin: 1px;
            }
            .bg-light {
                background-color: #ffd992;
            }
            .bg-dark {
                background-color: #683805;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class = "container">
            <h1 class = "header"> Multiplication Table </h1>
            <div class = "line"></div>
                <div class="container-grid">
                <?php
                    for ($row = 0; $row <= 10; $row++) {
                        for ($col = 0; $col <= 10; $col++) {
                            $product = $row * $col;

                            $color = ($row + $col) % 2 == 0 ? 'bg-light' : 'bg-dark';
                            echo "<div class='cell $color'>$product</div>";
                        }
                    }
                ?>
            </div>
        </div>
</html>