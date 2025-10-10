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
                echo "Bonjour";

                echo "<br>";
                for($i = 0; $i < 5; $i++)
                {
                    echo "Valeur : " . $i . "<br>";
                }
            ?>
        </div>
    </body>
</html>