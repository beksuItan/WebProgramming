<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 - Ex 1</title>
</head>
<body>
    <a href="index.html">Home</a>

    <form action="ex1.php" method="POST">
        X variable: <input type="number" name="variable"><br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["variable"])){
            $x = $_POST["variable"];
        }else{
            $x = 0;
        }

    ?>

    <p>x = x + 1</p>
    <?php echo "X variable equal: ". $x = $x + 1; ?>

    <br>

    <p>x += 1</p>
    <?php echo "X variable equal: ". $x += 1; ?>

    <br>

    <p>x++</p>
    <?php echo "X variable equal: ". $x++; ?>

    <br>

    <p>++x</p>
    <?php echo "X variable equal: ". ++$x; ?>
    
</body>
</html>