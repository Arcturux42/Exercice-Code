<!DOCTYPE html>
<html>
    <head>
        <title>ex 17</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nb = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
            }
            echo "Le carré de ce nombre est ", $nb**2;
        ?>
    </body>
</html>