<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex1.php" method="POST">
        <input type="number" name="var"><br>
        <input type="submit">
    </form>


    <p>Exercise 1.1</p>
    
    <?php
    
        function first($x){
            if($x > -2 and $x < 5){
                $res = 5*($x*$x) + 6; 
            }elseif($x>=5){
                $res = pow($x,3) + 7;
            }
            echo $res;
        }

        $x = $_POST["var"];
        
        first($x);
    
    ?>
    
    <br>

    <p>Exercise 1.2</p>

    <?php
    
        function second($x){
            if($x >= 0){
                $res = 5*$x;
            }elseif($x > -3 and $x < 0){
                $res = 3*pow($x,4) + 9;
            }
            echo $res;
        }

        $x = $_POST["var"];

        second($x);
    ?>
    
    <br>

    <p>Exercise 1.3</p>

    <?php
        
        function third($x){
            if($x < 1.5){
                echo $x;
            }elseif($x >= 1.5 and $x < 2.5){
                $res = pow($x,3) + $x;
            }elseif($x >= 2.5){
                $res = 3*pow($x,3) + 5;
            }

            echo $res;
        }

        $x = $_POST["var"];
        
        third($x);
    
    ?>

    <br>

    <p>Exercise 1.4</p>

    <?php
    
        function fourth($x){
            if($x < 1.22){
                echo $x;
            }elseif($x >= 1.22){
                $res = 5*pow($x,3) + 1.7;
            }

            echo $res;
        }

        $x = $_POST["var"];
    
        fourth($x);
    
    ?>
    
    <br>


    <p>Exercise 1.5</p>

    <?php
        function fifth($x){
            if($x > 0 and $x < 2){
                $res = pow($x,3);
            }elseif($x >= 2){
                $res = 3*pow($x,4) + 7;
            }elseif($x > 5 and $x <= 9){
                echo $x;
            }

            echo $res;
        }

        $x = $_POST["var"];
    
        fifth($x);
    
    ?>

    <br>

    <p>Exercise 1.6</p>

    <?php
        function sixth($x){
            if($x < 1.5){
                echo $x;
            }elseif($x >= 1.5 and $x < 2.5){
                echo pow($x,3);
            }elseif($x >= 2.5){
                echo 3*pow($x,3) + 5;
            }
        }
        
        $x = $_POST["var"];

        sixth($x);
    
    ?>

    <br>


</body>
</html>