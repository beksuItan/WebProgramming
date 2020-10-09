<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Exercise 1</h2>
    <?php
        $x = $_GET["variable"];

        echo "x = x + 1, X variable equal: ", $x = $x + 1, "\n <br>";
        echo "x += 1, X variable equal: ", $x += 1, "\n <br>";
        echo "x++, X variable equal: ", $x++, "\n <br>";
        echo "++x, X variable equal: ", ++$x, "\n <br>";

    ?>


    <h2>Exercise 2</h2>
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


    <h2>Exercise 3</h2>
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



    <h2>Exercise 4</h2>

    <?php
        function calc($n1, $n2,$operation){
            switch($operation){
                case '+':
                    $res = $n1 + $n2;
                    return "Addition is: ". $res;
                case '-':
                    $res = $n1 - $n2;
                    return "Substraction is: ". $res;
                case '*':
                    $res = $n1 * $n2;
                    return "Multiplication is: ". $res;
                case '/':
                    $res = $n1 / $n2;
                    return "Division is: ". $res;
                case '%':
                    $res = $n1 % $n2;
                    return "Mod is: ". $res;
                default:
                    return "Sorry, cannot calculate expression.";
            }
            
        }

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operation = $_GET["calc"];


        echo calc($num1,$num2,$operation);
            
    ?>


</body>
</html>