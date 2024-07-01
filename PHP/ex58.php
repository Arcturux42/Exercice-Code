<!DOCTYPE html>
<html>
    <head>
        <title>ex58</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            for($i=0; $i<=50; $i++) {
                echo "Tirage n°" . $i . " dès n°1 : " . rand(1, 6) . " - dès n°2 : " . rand(1, 6) . " - dès n°3 : " . rand(1, 6) . "<br><br>";
            }
        ?>
    </body>
</html>