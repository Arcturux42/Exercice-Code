<!DOCTYPE html>
<html>
    <head>
        <title>ex60</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $pile = 0;
            for($i=0; $i<=10000; $i++) {
                if(rand(1, 2)==1) {
                    $pile+=1;
                }
            }
            echo "Piles : " . ($pile/100) . "% - Faces : " . ((10000-$pile)/100) . "%";
        ?>
    </body>
</html>