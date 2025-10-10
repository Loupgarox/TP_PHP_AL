<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Anonce :</h1>
    <?php
        echo "Catégorie : " . $_POST['categorie'] . "<br>";
        echo "Titre : " . $_POST['titre'] . "<br>";
        echo "Description : " . $_POST['description'] . "<br>";
        echo "Prix : " . $_POST['prix'] . "<br>";
        echo "Etat : " . $_POST['etat'] . "<br>";
        echo "Livraison : " . $_POST['livraison'] . "<br>";
        echo "Mail : " . $_POST['mail'] . "<br>";
    ?>
</body>
</html>