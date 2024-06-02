<!DOCTYPE html>
<html>
    <head>
        <title>Ex 28</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $degre = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $degre = $_POST["degre"];
            }
            echo sprintf("%s° Celsius font %s° Fahrenheit", $degre, $degre*1.8+32);
        ?>
    </body>
</html>