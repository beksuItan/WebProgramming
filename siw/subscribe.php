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
        $to = "bkakpanbay@gmail.com";

        $subject = "Subscribe";
        $location = "http://localhost:3000/siw/index.php";
        $sender = "From sender";


        $body = "Name: ". $_GET["name"] ." \n";
        $body = "Email: ". $_GET["email"] ." \n";

        mail($to, $subject, "Hasdhadad", $sender);
    
    ?>
    
</body>
</html>