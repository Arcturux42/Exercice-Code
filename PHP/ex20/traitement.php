<!DOCTYPE html>
<html>
    <head>
        <title>ex 17</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $longeur="";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $longeur = $_POST["longeur"];
            }
            echo sprintf("Un carré qui a un côté de %d longeur cm aura un périmètre de %d et une surface de %d.", $longeur, $longeur*4, $longeur**2);
        ?>
    </body>
</html>