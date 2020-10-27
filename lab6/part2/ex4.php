<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 - Ex 4</title>
</head>
<body>
    <a href="index.html">Home</a>

    <form action="ex4.php" method="POST">
        <input type="number" name="num1" ><br>
        <input type="number" name="num2" ><br>
        <input type="text" name="operation" ><br>

        <input type="submit">
    </form>


    <?php

        if(isset($_POST["num1"])){
            $n1 = $_POST["num1"];
        }else{
            $n1 = 0;
        }

        if(isset($_POST["num2"])){
            $n2 = $_POST["num2"];
        }else{
            $n2 = 0;
        }

        $operation = $_POST["operation"];
        
        switch($operation){
            case '+':
                $res = $n1 + $n2;
                echo "Addition is: ". $res;
                break;
            case '-':
                $res = $n1 - $n2;
                echo "Subsctraction is: ". $res;
                break;
            case '*':
                $res = $n1 * $n2;
                echo "Multiplication is: ". $res;
                break;
            case '/':
                if($n2 != 0){
                    $res = $n1 / $n2;
                    echo "Division is: ". $res;
                }else{
                    echo "Error";
                }
                break;
            case '%':
                if($n2 != 0){
                    $res = $n1 % $n2;
                    echo "Mod is: ". $res . "\n";
                }else{
                    echo "Error";
                }   
        }  
    ?>
    
</body>
</html>