<!DOCTYPE html>
<html>
    <head>
        <title>Ex 37</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nb1 = "";
            $nb2 = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb1 = $_POST["nb1"];
                $nb2 = $_POST["nb2"];
            }
            if($nb1%$nb2==0) {
                echo "$nb1 est dans la table de $nb2";
            }else {
                echo "$nb1 n'est pas dans la table de $nb2";
            }
        ?>
    </body>
</html>