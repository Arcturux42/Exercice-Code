<!DOCTYPE html>
<html>
    <head>
        <title>ex 19</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nb="";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
            }
            echo "La racine carré de votre nombre est ", $nb**0.5;
        ?>
    </body>
</html>