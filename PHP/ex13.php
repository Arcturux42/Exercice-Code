<?php
    $a = 3;
    $b = 10;
    $c = 5;

    $a = $a + $c + $b;
    $b = $a - ($c + $b);
    $c = $a - ($c + $b);
    $a = $a - ($c + $b);

    echo $a, "\n", $b, "\n", $c;
?>