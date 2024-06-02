<!DOCTYPE html>
<html>
    <head>
        <title>ex 21</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $longeur = "";
            $largeur = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $longeur = $_POST["longeur"];
                $largeur = $_POST["largeur"];
            }
            echo sprintf("Un rectangle qui a une largeur de %d cm et une longeur de %d cm aura un périmètre de %d cm et une surface de %d cm².", $largeur, $longeur, ($largeur+$longeur)*2, $largeur*$longeur);
        ?>
    </body>
</html>