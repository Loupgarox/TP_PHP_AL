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
                $tabledebut = $_GET["tabledebut"];
                $tablefin = $_GET["tablefin"];
                $i = 0;

                for($j = $tabledebut; $j <= $tablefin; $j++)
                {
                    while($i <= 10)
                    {
                        echo $i . " x " . $j . " = " . $i * $j . "<br>";
                        $i++;
                    }
                    $i = 0;
                    echo "<br>";
                }
            ?>
        </div>
    </body>
</html>