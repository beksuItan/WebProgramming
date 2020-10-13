<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 - Ex 1</title>
</head>
<body>

    <form action="ex1.php" method="GET">
        X variable: <input type="text" name="variable"><br>
        <input type="submit">
    </form>

    <?php
        $x = $_GET["variable"];

        echo "x = x + 1, X variable equal: ", $x = $x + 1, "\n <br>";
        echo "x += 1, X variable equal: ", $x += 1, "\n <br>";
        echo "x++, X variable equal: ", $x++, "\n <br>";
        echo "++x, X variable equal: ", ++$x, "\n <br>";

    ?>
    
</body>
</html>