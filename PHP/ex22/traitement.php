<!DOCTYPE html>
<html>
    <head>
        <title>ex 22</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $rayon = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $rayon = $_POST["rayon"];
            }
            echo sprintf("Un cercle qui a un rayon de %s cm aura une circonférence de %.2f cm er une surface de %f cm².", $rayon, 2*(355/113)*$rayon, (355/113)*$rayon**2);
        ?>
    </body>
</html>