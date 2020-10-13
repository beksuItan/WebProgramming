<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h2>Thank you for your application! We will answer you within a day!</h2>
    <?php
        $name = $_GET["name"];
        $email = $_GET["email"];

        print "Name: $name <br>";
        print "Email: $email <br>"
    
    ?>
    
</body>
</html>