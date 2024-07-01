<!DOCTYPE html>
<html>
    <head>
        <title>ex64</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $suite = 0;
            for($i=0; $i<=10000; $i++) {
                $nb1 = rand(1, 6);
                $nb2 = rand(1, 6);
                $nb3 = rand(1, 6);
                if($nb1+$nb2+$nb3==7 and ($nb1==4 or $nb2==4 or $nb3==4)) {
                    $suite+=1;
                }
            }
            echo "421 : " . ($suite/100) . "%";
        ?>
    </body>
</html>