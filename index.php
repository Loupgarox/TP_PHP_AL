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
                echo "debut : " . $_GET["debut"];
                echo "<br> fin : " . $_GET["fin"];

                while($_GET["debut"] <= $_GET["fin"])
                {
                    echo "<br>" . $_GET["debut"];
                    $_GET["debut"]++;
                }
                phpinfo();
            ?>
        </div>
    </body>
</html>