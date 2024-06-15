<!DOCTYPE html>
<html>
    <head>
        <title>Ex47</title>
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
                $somme = 0;
                for ($nbBoucle = 1; $nbBoucle<$nb+1; $nbBoucle++) {
                    $somme += $nbBoucle;
                }
                echo $somme;
            }
        ?>
    </body>
</html>