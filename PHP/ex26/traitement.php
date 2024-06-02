<!DOCTYPE html>
<html>
    <head>
        <title>ex 26</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $pouces = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $pouces = $_POST["pouces"];
            }
            echo sprintf("%s pouces = %s cm.", $pouces, $pouces*2.54);
        ?>
    </body>
</html>