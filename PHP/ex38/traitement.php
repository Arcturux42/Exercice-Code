<!DOCTYPE html>
<html>
    <head>
        <title>Ex 38</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $annee = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $annee = $_POST["annee"];
            }
            if($annee%4==0 || $annee%400==0) {
                if ($annee%100==0) {
                    if ($annee%400==0) {
                        echo "Bissextile.";
                    } else {
                        echo "Pas bissextile.";
                    }
                } else {
                    echo "Bissextile.";
                }
            } else {
                echo "Pas bissextile.";
            }
        ?>
    </body>
</html>