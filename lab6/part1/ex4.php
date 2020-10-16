<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 4</title>
</head>
<body>
    <a href="index.html">Home</a>

    <form action="ex4.php" method="POST">
        Time on seconds: <input type="number" name="time"><br>
        <input type="submit">
    </form>

    <?php
        $input = $_POST["time"];
        $h = (int)($input / 3600);
        $min = (int)(($input % 3600)/60);
        $sec = (int)($input % 60);

        print "$h hours $min minutes $sec seconds"

    ?>
    
</body>
</html>