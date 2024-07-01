<!DOCTYPE html>
<html>
    <head>
        <title>ex54</title>
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
                echo "<br>Les diviseurs de $nb sont ";
                for($i=1; $i<=$nb; $i++) {
                    if($nb%$i==0) {
                        echo $i;
                        if($i!=$nb){
                            echo ", ";
                        }
                    }
                }
            }
        ?>
    </body>
</html>