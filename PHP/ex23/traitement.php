<!DOCTYPE html>
<html>
    <head>
        <title>ex 23</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $longeur = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $longeur = $_POST["longeur"];
            }
            echo sprintf("Un cube qui a une arrête de %s cm aura une surface de %.2f cm² et un volume de %.2f cm.", $longeur, 6*$longeur**2, $longeur**3);
        ?>
    </body>
</html>