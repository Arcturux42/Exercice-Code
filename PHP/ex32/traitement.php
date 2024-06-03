<!DOCTYPE html>
<html>
    <head>
        <title>Ex 32</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $age = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $age = $_POST["age"];
            }
            if($age<18){
                echo "Vous êtes mineur.";
            } else {
                echo "Vous êtes majeur.";
            }
        ?>
    </body>
</html>