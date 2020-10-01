<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        $x = (7 + 3 * 6 / 2 - 1); 
        print "7 + 3 * 6 / 2 - 1 = $x \n <br><br>";
        
        $x = (3 *9*(3+(4*5/3))); 
        print "3 * 9* (3+(4*5/3)) = $x \n <br><br>";

        $x = (12.0 + 2 / 5 * 10.0); 
        print "12.0 + 2 / 5 * 10.0 = $x \n <br><br>";

        $x = (2/5+10.0*3-2.5);
        print "2/5+10.0*3-2.5 = $x \n <br><br>";   
    ?>

    <h1>Exercise 2</h1>

    <?php
        $F = 42;
        $C = (5/9)*($F - 32);
        print "Celsius = $C \n"     
    ?>

    <h1>Exercise 2</h1>


    <?php
        $PI = 3.14159;
        $radius = 10;

        $d = 2*$radius;
        print "Diameter = $d \n <br><br>";

        $C = 2 * $PI * $radius;
        print "Circumference = $C \n <br><br>";

        $S = $PI * ($radius * $radius);
        print "Area = $S \n <br><br>";

    ?>


    <h1>Exercise 4</h1>
    <?php
        $x1 = 3;
        $x2 = 9;
        $y1 = 2;
        $y2 = 7;

        $distance = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

        print "Distance between two points = $distance <br><br>";

    ?>

    <h1>Exercise 5</h1>

    <?php
        $val = 5049;

        $hours = (int)($val / 3600);
        $minutes = (int)(($val % 3600)/60);
        $seconds = (int)($val % 60);

        print "$hours hours $minutes minutes $seconds seconds"

    ?>


    <h1>Exercise 6</h1>

    <?php
        $amount = 100;

        $cost = 45;

        $numbers = array(50,20,10,5,2,1);

        $diff = $amount - $cost;

        foreach($numbers as $val){
            $cnt = (int)($diff/$val);

            print "Number of $val cent coins: $cnt. <br><br>";

            $diff -= $cnt*$val;
        }

        
        
    ?>

</body>
</html>