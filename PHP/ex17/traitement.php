<!DOCTYPE html>
<html>
    <head>
        <title>ex 17</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nom = "";
            $prenom = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
            }
            echo "Bonjour $prenom $nom !!!";
        ?>
    </body>
</html>