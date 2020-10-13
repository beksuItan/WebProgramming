<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 - Ex 3</title>
</head>
<body>
    <form action="ex3.php" method="GET">
        <input type="text" name="fib" ><br>
        <input type="submit">
    </form>

    <?php
        $n = $_GET["fib"];

        $f1 = 0;
        $f2 = 1;
        $next = 0;

        for((int)$i=0;$i<$n;$i++){

            if($i == 0){
                echo $f1, "<br><br>";
            }elseif($i == 1){
                echo $f2, "<br><br>";
            }

            $next = $f1 + $f2;
            $f1 = $f2;
            $f2 = $next;
            
            echo $next, "<br><br>";
        }

    ?>


    
</body>
</html>