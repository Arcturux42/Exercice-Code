<!DOCTYPE html>
<html>
    <head>
        <title>ex 24</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $rayon = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $rayon = $_POST["rayon"];
            }
            echo sprintf("Une sphère qui a un rayon de %s cm aura une surface de %.2f cm² et un volume de %.2f cm.", $rayon, 4*(355/113)*$rayon, (4*(355/113)*$rayon**3)/3);
        ?>
    </body>
</html>