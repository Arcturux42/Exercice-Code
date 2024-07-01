<!DOCTYPE html>
<html>
    <head>
        <title>ex63</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $double = 0;
            for($i=0; $i<=10000; $i++) {
                if(rand(1, 6) == rand(1, 6)) {
                    $double+=1;
                }
            }
            echo "Double : " . ($double/100) . "%";
        ?>
    </body>
</html>