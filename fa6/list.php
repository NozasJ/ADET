<?php
require('database.php');

$sql = "SELECT * FROM dog_records ORDER BY name";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Breed List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top">
        <h2>List of Dogs</h2>
        <a href="index.php">Return</a>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Color</th>
                    <th>Height</th>
                    <th>Weight</th>
                </tr>
            </thead>
            <tbody>
                    <?php $i = 1; 
                    while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['breed'] ?></td>
                        <td><?= $row['age'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['color'] ?></td>
                        <td><?= $row['height']. " ft" ?></td>
                        <td><?= $row['weight']. " kg" ?></td>
                    </tr>
                    <?php endwhile; ?>
                    <?php if(mysqli_num_rows($result) == 0):?>
                        <tr>
                            <td colspan="8" >No dogs registered yet...</td>
                        </tr>
                        <?php
                        endif;
                        ?>
            </tbody>
        </table>
    </div>
</body>
</html>