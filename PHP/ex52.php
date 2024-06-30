<!DOCTYPE html>
<html>
    <head>
        <title>ex52</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $fibo = array(0, 1);
            for ($i=1; $i<=30; $i++) {
                $fibo[] = $fibo[$i] + $fibo[$i-1];
            }
            foreach ($fibo as $nb) {
                echo $nb . " ";
            }
        ?>
    </body>
</html>