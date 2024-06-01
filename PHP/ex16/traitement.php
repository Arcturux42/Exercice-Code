<!DOCTYPE html>
<html>
    <head>
        <title>Ex 15</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nom = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nom = $_POST["nom"];
            }
            echo "Bonjour $nom !!!";
        ?>
    </body>
</html>