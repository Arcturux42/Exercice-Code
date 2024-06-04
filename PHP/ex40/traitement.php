<!DOCTYPE html>
<html>
    <head>
        <title>Ex 40</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nb = "";
            $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'décembre');
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
            }
            echo $mois[$nb-1];
        ?>
    </body>
</html>