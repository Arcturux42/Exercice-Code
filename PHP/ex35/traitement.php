<!DOCTYPE html>
<html>
    <head>
        <title>Ex 35</title>
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
            if($nb1+$nb2<0){
                echo "La somme des deux nombre est négatif.";
            } else {
                echo "La somme des deux nombre est positif.";
            }
        ?>
    </body>
</html>