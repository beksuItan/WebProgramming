<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 2</title>
</head>
<body>
    <a href="index.html">Home</a>


    <form action="ex2.php" method="POST">
        Temperature in Celcius: <input type="number" name="temperature"><br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["temperature"])){
            $input = $_POST["temperature"];
        }else{
            $input = 0;
        }

        $C  = (5/9) * ($input - 32); 
       
        print "Celsius = $C"
    ?>
    
</body>
</html>