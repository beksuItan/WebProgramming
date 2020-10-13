<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 2</title>
</head>
<body>

    <!-- <form action="ex2.php" method="POST">
        Temperature in Celcius: <input type="text" name="temperature"><br>
        <input type="submit">
    </form> -->

    <?php
        $input = $_GET["temperature"];
        $C  = (5/9) * ($input - 32); 
        print "Celsius = $C"
    ?>
    
</body>
</html>