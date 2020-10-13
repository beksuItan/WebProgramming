<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 - Ex 4</title>
</head>
<body>
    <form action="ex4.php" method="GET">
        <input type="text" name="num1" ><br>
        <input type="text" name="num2" ><br>
        <input type="text" name="calc" ><br>

        <input type="submit">
    </form>


    <?php
        function calc($n1, $n2,$operation){
            switch($operation){
                case '+':
                    $res = $n1 + $n2;
                    return "Addition is: ". $res;
                    break;
                case '-':
                    $res = $n1 - $n2;
                    return "Substraction is: ". $res;
                    break;
                case '*':
                    $res = $n1 * $n2;
                    return "Multiplication is: ". $res;
                    break;
                case '/':
                    if($n2 != 0){
                        $res = $n1 / $n2;
                        return "Division is: ". $res;
                    }else{
                        print "Error";
                    }
                    break;
                case '%':
                    if($n2 != 0){
                        $res = $n1 % $n2;
                        return "MOD is: ". $res;
                    }else{
                        print "Error";
                    }
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