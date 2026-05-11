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
}
table{
    border-collapse: collapse;
    width: 50%;
    margin: 20px;
}
th{
    background-color: yellow;
}
td{
    padding: 5px;
}
.header{
    justify-content: space-between;
    align-items: center;
}
h1{
    text-align: center;
    font-size: 15pt;
}
p{
    display: inline-block;
    padding: 15px;
    text-align: center;
    font-size: 12pt;
}
button{
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}
button:hover{
    background-color: #0056b3;
}

}
</style>
<body>
    <?php 
    $fmetre = 1 * 3.28084;
    $imetre = 1 * 39.37008;
    $ymetre = 1 * 1.09361;
    $millimetre = $imetre / 1000;
    $centimetre = $imetre / 100;
    $mkilometre = 1 * 0.62137;
    $ykilometre = 1 * 1093.6133;
    
    $inch = 1 * 2.54;
    $foot = 1 * 30.48;
    $yard = 1 * 91.44;
    $yard2 = 1 * 0.9144;
    $mile = 1 * 1609.344;
    $mile2 = 1 * 1.609344;
    ?>
    <div class = "header">
        <p style = "margin-left: 450px;"> Name: John Benedict I. Sazon</p> <p> Date: May 4, 2026 </p>
        <h1> MEASURE CONVERSION CHART - LENGTHS (UK) </h1>
        <div class = "container">
            <table border = "1" cellspacing = "0" cellpadding = "10">
                <tr>
                    <th colspan="8">METRIC CONVERSIONS</th>
                </tr>
                <tr>
                    <td>1 centimetre</td><td> = </td><td>10 millimetres</td><td> 1 cm </td><td> = </td><td> 10 mm</td>
                </tr>
                <tr>
                    <td>1 decimetre</td><td> = </td><td>10 centimetres</td><td> 1 dm </td><td> = </td><td> 10 cm</td>
                </tr>
                <tr>
                    <td>1 metre</td><td> = </td><td>100 centimetres</td><td> 1 m </td><td> = </td><td> 100 cm</td>
                </tr>
                <tr>
                    <td>1 kilometre</td><td> = </td><td>1000 metres</td><td> 1 km </td><td> = </td><td> 1000 m</td>
                </tr>
            </table>

            <table border = "1" cellspacing = "0" cellpadding = "10">
                <tr>
                    <th colspan="8">IMPERIAL CONVERSIONS</th>
                </tr>
                <tr>
                    <td>1 foot</td><td> = </td><td>12 inches</td><td> 1 ft </td><td> = </td><td> 12 in</td>
                </tr>
                <tr>
                    <td>1 yard</td><td> = </td><td>3 feet</td><td> 1 yd </td><td> = </td><td> 3 ft</td>
                </tr>
                <tr>
                    <td>1 chain</td><td> = </td><td>22 yards</td><td> 1 ch </td><td> = </td><td> 22 yd</td>
                </tr>
                <tr>
                    <td>1 furlong</td><td> = </td><td>220 yards</td><td> 1 fur </td><td> = </td><td> 220 yd</td>
                </tr>
                <tr>
                    <td>1 mile</td><td> = </td><td>1760 yards</td><td> 1 mi </td><td> = </td><td> 1760 yd</td>
                </tr>
            </table>

            <table border = "1" cellspacing = "0" cellpadding = "10">
                <tr>
                    <th colspan="8">METRIC -> IMPERIAL CONVERSIONS</th>
                </tr>
                <tr>
                    <td>1 millimetre</td><td> = </td><td><?php echo $millimetre; ?> inches</td><td> 1 mm </td><td> = </td><td> <?php echo $millimetre; ?> in</td>
                </tr>
                <tr>
                    <td>1 centimetre</td><td> = </td><td><?php echo $centimetre; ?> inches</td><td> 1 cm </td><td> = </td><td> <?php echo $centimetre; ?> in</td>
                </tr>
                <tr>
                    <td>1 metre</td><td> = </td><td><?php echo $imetre; ?> inches</td><td> 1 m </td><td> = </td><td> <?php echo $imetre; ?> in</td>
                </tr>
                <tr>
                    <td>1 metre</td><td> = </td><td><?php echo $fmetre; ?> feet</td><td> 1 m </td><td> = </td><td> <?php echo $fmetre; ?> ft</td>
                </tr>
                <tr>
                    <td>1 metre</td><td> = </td><td><?php echo $ymetre; ?> yards</td><td> 1 m </td><td> = </td><td> <?php echo $ymetre; ?> yd</td>
                </tr>
                <tr>
                    <td>1 kilometre</td><td> = </td><td><?php echo $ykilometre; ?> yards</td><td> 1 km </td><td> = </td><td> <?php echo $ykilometre; ?> yd</td>
                </tr>
                <tr>
                    <td>1 kilometre</td><td> = </td><td><?php echo $mkilometre; ?> miles</td><td> 1 km </td><td> = </td><td> <?php echo $mkilometre; ?> mi</td>
                </tr>
            </table>

            <table border = "1" cellspacing = "0" cellpadding = "10">
                <tr>
                    <th colspan="8">IMPERIAL -> METRIC CONVERSIONS</th>
                </tr>
                <tr>
                    <td>1 inch</td><td> = </td><td><?php echo $inch; ?> centimetre</td><td> 1 in </td><td> = </td><td> <?php echo $inch; ?> cm</td>
                </tr>
                <tr>
                    <td>1 foot</td><td> = </td><td><?php echo $foot; ?> centimetre</td><td> 1 ft </td><td> = </td><td> <?php echo $foot; ?> cm</td>
                </tr>
                <tr>
                    <td>1 yard</td><td> = </td><td><?php echo $yard; ?> centimetre</td><td> 1 yd </td><td> = </td><td> <?php echo $yard; ?> cm</td>
                </tr>
                <tr>
                    <td>1 yard</td><td> = </td><td><?php echo $yard2; ?> metres</td><td> 1 yd </td><td> = </td><td> <?php echo $yard2; ?> m</td>
                </tr>
                <tr>
                    <td>1 mile</td><td> = </td><td><?php echo $mile; ?> metres</td><td> 1 mi </td><td> = </td><td> <?php echo $mile; ?> m</td>
                </tr>
                <tr>
                    <td>1 mile</td><td> = </td><td><?php echo $mile2; ?> kilometres</td><td> 1 mi </td><td> = </td><td> <?php echo $mile2; ?> km</td>
                </tr>
            </table>
            <a href = "index.php"><button> BACK</button></a>
        </div>
    </div>
</body>
</html>