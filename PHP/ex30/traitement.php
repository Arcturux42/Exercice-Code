<!DOCTYPE html>
<html>
    <head>
        <title>Ex 30</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $poids = "";
            $taille = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $poids = $_POST["poids"];
                $taille = $_POST["taille"];
            }
            echo sprintf("Votre indece de masse corporelle vaut %s.", $poids/($taille*$taille));
        ?>
    </body>
</html>