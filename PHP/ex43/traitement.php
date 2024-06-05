<!DOCTYPE html>
<html>
    <head>
        <title>ex 43</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nb = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
            }

            echo $nb;
        ?>
    </body>
</html>