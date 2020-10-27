<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 6</title>
</head>
<body>
    <a href="index.html">Home</a>


    <form action="ex6.php" method="POST">
        Array: <input type="number" name="cost"><br>
        <input type="submit">
    </form>
    

    <?php
        $cost = $_POST["cost"];

        $numbers = array(50,20,10,5,2,1);
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