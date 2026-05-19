<html>
    <head>
        <title>Part 2</title>
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
        background-color: white;
        padding: 40px;
        max-width: 35%;
        margin: 50px auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse; 
    }
    th, td {
        padding: 10px;
    }
</style>
<body>
    <?php $names = [
    "allyssa",
    "emma",
    "oliver",
    "ava",
    "elijah",
    "charlotte",
    "william",
    "sophia",
    "lucas",
    "amelia",
    "benjamin",
    "isabella",
    "henry",
    "mia",
    "alexander",
    "evelyn",
    "michael",
    "harper",
    "daniel",
    "camila"
    ];
    ?>
    <div class = "container">
        <table>
            <thead> 
                <tr>
                    <th colspan = "6">
                    List of names: 
                        <?php 
                        for($i = 0; $i < 20; $i++)
                            {echo $names[$i].", ";
                        };?> 
                    </th>
                </tr>
            </thead> 
            <tr>
                <td>
                    Name
                </td>
                <td>
                    Number of characters 
                </td>
                <td>
                    Uppercase first letter
                </td>
                <td>
                    Replace vowels with @
                </td>
                <td>
                    Check position of character "a"
                </td>
                <td>
                    Reverse name
                </td>
            </tr>
            <?php $count = 0;
            foreach ($names as $name): ?>
                <tr> 
                    <td>
                        <?php echo$names[$count];?>
                    </td>
                    <td>
                        <?php echo strlen($names[$count]); ?>
                    </td>
                    <td>
                        <?php echo ucfirst($names[$count]); ?>
                    </td>
                    <td>
                        <?php echo str_replace(["a","e","i","o","u"], "@", $names[$count]); ?>
                    </td>
                    <td>
                        <?php 
                            if (strpos($names[$count], "a") === false):
                                echo "n/a";
                            else:
                                echo strpos($names[$count], "a");
                            endif;
                        ?>
                    </td>
                    <td>
                        <?php echo strrev($names[$count]); ?>
                    </td>
                </tr>

            <?php $count++;
            endforeach ?>
            <tr>

            </tr>
        </table>
    </div>
</body>
</html>
