<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 3</title>
</head>
<body>

    <form action="ex3.php" method="GET">
        Radius: <input type="text" name="radius"><br>
        <input type="submit">
    </form>


    <?php
        $PI = 3.14159;
        $input = $_GET["radius"];

        $d = 2*$input;
        print "Diameter = $d \n <br><br>";

        $C = 2 * $PI * $input;
        print "Circumference = $C \n <br><br>";

        $S = $PI * ($input*$input);
        print "Area = $S \n <br><br>";

    ?>
    
</body>
</html>