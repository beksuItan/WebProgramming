<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 1 - Ex 4</title>
</head>
<body>
    <form action="ex4.php" method="GET">
        Time on seconds: <input type="text" name="time"><br>
        <input type="submit">
    </form>

    <?php
        $input = $_GET["time"];
        $h = (int)($input / 3600);
        $min = (int)(($input % 3600)/60);
        $sec = (int)($input % 60);

        print "$h hours $min minutes $sec seconds"

    ?>
    
</body>
</html>