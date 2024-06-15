<!DOCTYPE html>
<html>
    <head>
        <title>Ex50</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <?php
                for ($i=0; $i<10; $i++) {
                    echo "<label for='nb$i'>Entrez le nombre n°" . ($i+1) . ":</label>";
                    echo "<input type='number' id='nb$i' name='nb$i'>";
                    echo "<br>";
                }
                echo "<br>";
                echo "<input type='submit' value='Envoyez'>";
            ?>
        </form>

        <?php
            $PlusGrandNombre = -999999999;
            if ($_SERVER["REQUEST_METHOD"]=="POST") {
                for ($i=0; $i<10; $i++) {
                    if ($PlusGrandNombre < $_POST["nb$i"]) {
                        $PlusGrandNombre = $_POST["nb$i"];
                        $position = $i+1;
                    }
                }
                echo "<br>";
                echo "Le plus grand nombre est $PlusGrandNombre en $position position";
            }
        ?>
    </body>
</html>