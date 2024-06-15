<!DOCTYPE html>
<html>
    <head>
        <title>Ex45</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <label for="nb">Entrez un nombre :</label>
            <input type="number" name="nb" id="nb">
            <input type="submit" value="Envoyez">
        </form>

        <?php
            $nb = 0;

            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
                for ($nbBoucle = $nb; $nb<$nbBoucle+10; $nb++) {
                    echo $nb, "; \n";
                }
            }
        ?>
    </body>
</html>