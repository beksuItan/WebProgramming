<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="ex1.php" method="POST">
        <input type="number" name="var"><br>
        <input type="submit">
    </form> -->

    <a href="index.html">Back to HOME</a>


    <p>Exercise 2.1</p>
    <?php

        function sum(int $x,int $n){
            $total = 0;

            // $i = 1;
            // do{
            //     $total += pow($x,$i)/2;
            //     $i+=1;
            // }while($i <= $n);

            for((int)$i=1;$i <= $n;$i++){
                $total += pow($x,$i)/2;
            }

            echo $total;
        }
    
        // $x = $_POST["var"];
        
        sum(2,5);
        
        
        ?>
    
    <p>Exercise 2.2</p>

    <?php
        function product(int $x, int $n){
            $prod = 1;
            $k = 1;
        
            // do{
            //     $prod *= (1 + (($k*$x)/3));
            //     $k+=1;
            // }while($k <= $n);
        
            for($k = 1;$k<=$n;$k++){
                $prod *= (1 + (($k*$x)/3));
            }
                
            echo $prod;
        }

        // $x = $_POST["var"];

        product(3,4);

    ?>

</body>
</html>