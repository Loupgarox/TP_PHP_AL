<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Initiation à PHP</title>
    </head>
    <body>
        <h1>PHP</h1>
        <div>
            <?php
                $table = $_GET["table"];
                $i = 0;
                while($i <= 10)
                {
                    echo $i . " x " . $table . " = " . $i * $table . "<br>";
                    $i++;
                }
            ?>
        </div>
    </body>
</html>