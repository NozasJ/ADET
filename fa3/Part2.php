<html>
    <head>
        <title>Part 2</title>
    </head>
<style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #004a1f;
            color: white;
        }
        .back{
            background-color: #004a1f;
            padding: 30px;
            border-radius: 40px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 10%; 
            height:4%;
            text-align: center;
            align-items:center;
            color: white;
            font-size: 4vh;
        }
        .back:hover{
            background-color: #00b83d;
            cursor: pointer;
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
    <?php $numbers = [1,2,3,4,5,6,7,8,9,10];
    $add = array_sum($numbers);
    $sub = $numbers[0];
    for($i = 1; $i < 10; $i++){
        $sub -= $numbers[$i];
    };
    $mult = array_product($numbers);
    $quot = $numbers[0];
    for($i = 1; $i < 10; $i++){
        $quot /= $numbers[$i];
    };
    ?>
    <a href = "index.php" class = "press"><div class ="back"> Back </div></a>
    <table>
        <thead>
            <tr>
                <th colspan = "2"> <p>Array list: 
                <?php for($i = 0; $i <10; $i++){
                    echo $numbers[$i]." ";
                };?>
                </p></th>
            </tr>
        </thead>
            <tr>
                <td><p>Addition</p></td>
                <td><?= $add?></td>
            <tr>
            <tr>
                <td><p>Subtraction</p></td>
                <td><?= $sub?></td>
            </tr>
            <tr>
                <td><p>Multiplication</p></td>
                <td><?= $mult?></td>
            </tr>
            <tr>
                <td><p>Division</p></td>
                <td><?= $quot?></td>
            </tr>
    </table>
    
</body>
</html>