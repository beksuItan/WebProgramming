<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 - Ex 2</title>
</head>
<body>
    <form action="ex2.php" method="GET">
        Number 1: <input type="text" name="number1"><br>
        Number 2: <input type="text" name="number2"><br>
        Number 3: <input type="text" name="number3"><br>
        Number 4: <input type="text" name="number4"><br>
        Number 5: <input type="text" name="number5"><br>
        Number 6: <input type="text" name="number6"><br>
        Number 7: <input type="text" name="number7"><br>
        Number 8: <input type="text" name="number8"><br>
        Number 9: <input type="text" name="number9"><br>
        Number 10: <input type="text" name="number10"><br>

        <input type="submit">
    </form>


    <?php
        $num1 = $_GET["number1"];
        $num2 = $_GET["number2"];
        $num3 = $_GET["number3"];
        $num4 = $_GET["number4"];
        $num5 = $_GET["number5"];
        $num6 = $_GET["number6"];
        $num7 = $_GET["number7"];
        $num8 = $_GET["number8"];
        $num9 = $_GET["number9"];
        $num10 = $_GET["number10"];

        $numbers = array($num1,$num2,$num3, $num4,$num5,$num6, $num7,$num8,$num9,$num10);
        echo "The largest number is ", max($numbers);

    ?>

    

</body>
</html>