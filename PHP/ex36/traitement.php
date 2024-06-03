<!DOCTYPE html>
<html>
    <head>
        <title>Ex 36</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $age = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $age = $_POST["age"];
            }
            if($age<6) {
                echo "Tu es à la maternelle.";
            } elseif($age<12) {
                echo "Tu es en primaire.";
            } elseif($age<18) {
                echo "Tu es en secondaire.";
            } elseif($age<23) {
                echo "Tu es aux études supérieurs";
            } elseif($age<65) {
                echo "Tu travailles";
            } elseif($age<100) {
                echo "Tu es pensionné";
            } else {
                echo "Respect !";
            }
        ?>
    </body>
</html>