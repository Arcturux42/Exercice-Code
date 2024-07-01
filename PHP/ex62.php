<!DOCTYPE html>
<html>
    <head>
        <title>ex62</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $doubleSix = 0;
            for($i=0; $i<=10000; $i++) {
                if(rand(1, 6)==6 and rand(1, 6)==6) {
                    $doubleSix+=1;
                }
            }
            echo "Double six : " . ($doubleSix/100) . "%";
        ?>
    </body>
</html>