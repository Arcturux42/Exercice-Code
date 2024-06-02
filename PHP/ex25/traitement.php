<!DOCTYPE html>
<html>
    <head>
        <title>ex 25</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $rayon = "";
            $hauteur = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $hauteur = $_POST["hauteur"];
                $rayon = $_POST["rayon"];
            }
            $apotheme = ($rayon**2+$hauteur**2)**0.5;
            echo sprintf("Un cône qui a un rayon %s cm et une hauteur de %s aura une surface de %s cm² et un volume de %s cm", $rayon, $hauteur, (355/113)*$rayon*($rayon+$apotheme), (1/3)*(355/113)*$rayon**2*$hauteur);
        ?>
    </body>
</html>