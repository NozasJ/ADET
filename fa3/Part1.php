<html>
    <head>
        <title>Part 1</title>
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
    <?php
        $people = array(
                    [
                        "name"     => "John",
                        "image"    => "john.jpg",
                        "age"      => 25,
                        "birthday" => "09/05/2000",
                        "phone"    => "09921387665" 
                    ],
                    [
                        "name"     => "Alice",
                        "image"    => "alice.jpg",
                        "age"      => 22,
                        "birthday" => "11/12/2003",
                        "phone"    => "09171234567"
                    ],
                    [
                        "name"     => "Bob",
                        "image"    => "bob.jpg",
                        "age"      => 30,
                        "birthday" => "03/20/1993",
                        "phone"    => "09281234567"
                    ],
                    [
                        "name"     => "Eve",
                        "image"    => "eve.jpg",
                        "age"      => 28,
                        "birthday" => "07/15/1995",
                        "phone"    => "09371234567"
                    ],
                    [
                        "name"     => "Charlie",
                        "image"    => "charlie.jpg",
                        "age"      => 27,
                        "birthday" => "01/10/1996",
                        "phone"    => "09481234567"
                    ],
                    [
                        "name"     => "David",
                        "image"    => "david.jpg",
                        "age"      => 24,
                        "birthday" => "05/25/1999",
                        "phone"    => "09561234567"
                    ],
                    [
                        "name"     => "Grace",
                        "image"    => "grace.jpg",
                        "age"      => 26,
                        "birthday" => "10/30/1997",
                        "phone"    => "09671234567"
                    ],
                    [
                        "name"     => "Frank",
                        "image"    => "frank.jpg",
                        "age"      => 29,
                        "birthday" => "02/14/1994",
                        "phone"    => "09781234567"
                    ],
                    [
                        "name"     => "Hannah",
                        "image"    => "hannah.jpg",
                        "age"      => 23,
                        "birthday" => "08/05/2000",
                        "phone"    => "09891234567"
                    ],
                    [  
                        "name"     => "Victor",
                        "image"    => "victor.jpg",
                        "age"      => 61,
                        "birthday" => "01/10/1965",
                        "phone"    => "09981234567"
                    ]
        );
        sort($people);
    ?>
    <a href = "index.php" class = "press"><div class ="back"> Back </div></a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Age</th>
                <th>Birthdate</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <?php $count = 1;
        foreach($people as $person): ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $person['name']; ?></td>
                <td><img src ="<?php echo $person['image']; ?>" style="width: 50px; height: 50px; object-fit: cover;"></td>
                <td><?php echo $person['age']; ?></td>
                <td><?php echo $person['birthday']; ?></td>
                <td><?php echo $person['phone']; ?></td>
            </tr>
        <?php $count++;
        endforeach; ?>
    </table>
</body>
</html>