<!DOCTYPE html>
<html>
    <head>
        <title>Ex 42</title>
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

            $imc = $poids/($taille*$taille);
            
            if($imc<16.5) {
                echo "Famine.";
            } elseif($imc<18.5) {
                echo "Maigreur.";
            } elseif($imc<25) {
                echo "Corpulence normal.";
            } elseif($imc<30) {
                echo "Surpoids.";
            } elseif($imc<35) {
                echo "Obésité modérée.";
            } elseif($imc<=40) {
                echo "Obésité sévère.";
            } elseif($imc>40) {
                echo "Obésité morbide.";
            }
        ?>
    </body>
</html>