<!DOCTYPE html>
<html>
    <head>
        <title>Ex46</title>
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
                for ($nbBoucle = 0; $nbBoucle<11; $nbBoucle++) {
                    echo "$nb x $nbBoucle = ", $nbBoucle*$nb;
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>