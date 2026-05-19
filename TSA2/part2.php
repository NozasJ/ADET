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
            background-color: #390009;
            color: white;
        }
    </style>
    <body>
        <?php 
        function cube($s){
            return $s ** 3;
        }
        function rectangle($l, $w, $h){
            return $l * $w * $h;
        }
        function genprism($b, $h){
            return $b * $h;
        }
        function cone($r, $h){
            return 3.14 * $r**2 * $h/3;
        }
        function sphere($r){
            return 4/3 * 3.14 * $r**3;
        }
        ?>
        <table>
            <thead>
                <tr>
                    <th colspan = 3>Volume of shapes</th>
                </tr>
            </thead>
            <tr>
                <th>Values</th>
                <th>Formula</th>
                <th>Answer</th>
            </tr>
            <tr>
                <td>s = 4</td>
                <td>s<sup>3</sup></td>
                <td><?php echo cube(4);?></td>
            </tr>
            <tr>
                <td>l = 5<br>w = 5<br>h = 3</td>
                <td>l * w * h</td>
                <td> <?php echo rectangle(5, 5, 3);?></td>
            </tr>
            <tr>
                <td>b = 6<br>h = 3</td>
                <td>b * h</td>
                <td> <?php echo genprism(6, 3);?></td>
            </tr>
            <tr>
                <td>r = 2<br>h = 4</td>
                <td>πr<sup>2</sup>h/3</td>
                <td> <?php echo cone(2, 4);?></td>
            </tr>
            <tr>
                <td>r = 4</td>
                <td>4/3πr<sup>3</sup></td>
                <td> <?php echo cone(2, 4);?></td>
            </tr>
        </table>
    </body>
</html>