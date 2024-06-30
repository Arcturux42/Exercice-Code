<!DOCTYPE html>
<html>
    <head>
        <title>ex53</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post">
            <label for="nb1">Entrez un premier nombre : </label>
            <input type="number" id="nb1" name="nb1">
            <br>
            <label for="nb1">Entrez un deuxième nombre : </label>
            <input type="number" id="nb2" name="nb2">
            <br>
            <input type="submit" value="Envoyez">
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                echo "<br>";
                $fibo = array($_POST["nb1"], $_POST["nb2"]);
                for ($i=1; $i<=30; $i++) {
                    $fibo[] = $fibo[$i] + $fibo[$i-1];
                }
                foreach ($fibo as $nb) {
                    echo $nb . " ";
                }
            }
        ?>
    </body>
</html>