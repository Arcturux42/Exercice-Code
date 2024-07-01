<!DOCTYPE html>
<html>
    <head>
        <title>ex61</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $six = 0;
            for($i=0; $i<=10000; $i++) {
                if(rand(1, 6)==6) {
                    $six+=1;
                }
            }
            echo "Six : " . ($six/100) . "%";
        ?>
    </body>
</html>