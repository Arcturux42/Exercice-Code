<!DOCTYPE html>
<html>
    <head>
        <title>Ex 29</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $fahrenheit = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $fahrenheit = $_POST["fahrenheit"];
            }
            echo sprintf("%s° Fahrenheit font %s° Celsius", $fahrenheit, ($fahrenheit-32)/1.8);
        ?>
    </body>
</html>