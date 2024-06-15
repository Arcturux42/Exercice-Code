<!DOCTYPE html>
<html>
    <head>
        <title>ex 44</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <label for="nb">Donnez un nombre entre 10 et 20 :</label>
            <input type="number" id="nb" name="nb">
            <input type="submit">
        </form>

        <?php
            $nb = "";
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];

                if ($nb<10) {
                    echo "Plus grand !";
                } elseif ($nb>20) {
                    echo "Plus petit !";
                } else {
                    echo "Votre nombres est $nb";
                }
            }
        ?>
    </body>
</html>