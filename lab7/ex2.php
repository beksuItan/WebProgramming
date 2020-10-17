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

    <p>Exercise 2.1</p>
    <?php

        function first($x,$n){
            $count = 0;

            $i = 1;
            do{
                echo $count += pow($x,$i)/2;
            }while($i <= $n);

            // for($i=1;$i <= $n;$i++){
            //     echo pow($x,$i)/2;
            // }
        }
    
        $x = $_POST["var"];
        
        first($x,10);
        
        
        ?>
    
    <p>Exercise 2.2</p>

    <?php
        function second($x,$n){
            $prod = 1;
            $k = 1;
        
            do{
                $prod *= (1 + (($k*$x)/3));
            }while($k < $n);
        
            // for($k = 1;$k<$n;$k++){
            //     $prod *= (1 + (($k*$x)/3));
            // }
                
            echo $prod;
        }

        $x = $_POST["var"];

        second($x,10);

    ?>

</body>
</html>