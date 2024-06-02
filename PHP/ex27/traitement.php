<!DOCTYPE html>
<html>
    <head>
        <title>ex 27</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $cm = "";
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                $cm = $_POST["cm"];
            }
            echo sprintf("%s cm = %s pouces.", $cm, $cm/2.54);
        ?>
    </body>
</html>