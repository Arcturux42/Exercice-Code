<!DOCTYPE html>
<html>
    <head>
        <title>Ex51</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <?php
                echo "<label for='nb'>Entrez un nombre ou renvoyer le formulaire vide pour arréter : </label>";
                echo "<input type='number' id='nb' name='nb'>";
                echo "<input type='submit' value='Envoyez'>";
            ?>
        </form>

        <?php
            session_start(); # Démarre la sesseion
            if(!isset($_SESSION["PlusGrandNombre"])) {
                // Si la variable de session n'existe pas, l'initialiser à -999999999
                $_SESSION["PlusGrandNombre"] = -999999999;
            }
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
                if($nb=="") {
                    echo "<br>";
                    echo "Le plus grand nombre est " . $_SESSION["PlusGrandNombre"];
                    session_destroy();
                } elseif($nb>$_SESSION["PlusGrandNombre"]) {
                    $_SESSION["PlusGrandNombre"] = $nb;
                }
            }
        ?>
    </body>
</html>