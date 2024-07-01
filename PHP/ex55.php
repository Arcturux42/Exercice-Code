<!DOCTYPE html>
<html>
    <head>
        <title>ex55</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <label for="nb">Entrez un nombre : </label>
            <input type="number" name="nb" id="nb">
            <input type="submit" value="Envoyez">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $nb = $_POST["nb"];
                $estPremier = TRUE;
                for($i=2; $i<=($nb/2); $i++) {
                    if($nb%$i==0) {
                        $estPremier = FALSE;
                        break;
                    }
                }
                if($estPremier==FALSE) {
                    echo "$nb n'est pas premier";
                } else {
                    echo "$nb est premier";
                }
            }
        ?>
    </body>
</html>