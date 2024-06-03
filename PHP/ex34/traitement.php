<!DOCTYPE html>
<html>
    <head>
        <title>Ex 34</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nombre = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nombre = $_POST["nombre"];
            }
            if($nombre<0){
                echo "Votre nombre est négatif";
            } elseif($nombre>0) {
                echo "Votre nombre est positif";
            } else {
                echo "Votre nombre est nul";
            }
        ?>
    </body>
</html>