<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 6</title>
</head>
<body>
    <!-- <form action="ex6.php" method="GET">
        Array: <input type="text" name="array[]"><br>
        <input type="submit">
    </form> -->
    

    <?php
        $cost = $_GET["cost"];

        $num1 = $_GET["array1"];
        $num2 = $_GET["array2"];
        $num3 = $_GET["array3"];
        $num4 = $_GET["array4"];
        $num5 = $_GET["array5"];
        $num6 = $_GET["array6"];

        $numbers = array($num1,$num2,$num3,$num4,$num5,$num6);
        $amount = 100;
        $return = $amount - $cost;

        foreach($numbers as $val){
            $num = (int) ($return/$val);

            print "Number of coins $val : $num <br><br>";

            $return = $return - $num*$val;
        }

    ?>
</body>
</html>