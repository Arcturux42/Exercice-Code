<!DOCTYPE html>
<html>
    <head>
        <title>Ex 41</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $annee = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $annee = $_POST["annee"];
            }
            if(($annee%4==0 && $annee%100!=0) || $annee%400==0) {
                echo "Jeux olympique\n";
                echo "Coupe d'Europe de football.\n";
            } 
            if($annee%2!=0) {
                echo "Championnat du monde d'athlétisme.\n";
            } 
            if($annee%2==0 && ($annee%4!=0 && $annee%400!=0)) {
                echo "La coupe du monde de football.\n";
            } 
            if($annee%2==0 && ($annee%4!=0 && $annee%400!=0)) {
                echo "Championnat d'Europe d'athlétisme.\n";
            }
        ?>
    </body>
</html>