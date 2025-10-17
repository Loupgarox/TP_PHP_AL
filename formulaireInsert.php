<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        <h1>Ajouter un nouveau film</h1>
        <?php 
            include "connexion.php";

            $requete = "select max(id) from film";
            $commande = Connexion::getInstance()->prepare($requete);
            $commande->execute();
            $maxId = $commande->fetch();

            $requete2 = "select nom from realisateur";
            $commande = Connexion::getInstance()->prepare($requete2);
            $commande->execute();
            $nomRealisateur = $commande->fetch();
        ?>
        <form action="insertFilm.php" method="post">
            Identifiant du film :
            <input type="number" name="idfilm" value=<?php echo $maxId[0] + 1 ?> required>
            <br>
            Identifiant du réalisateur :
            <select>
                <option value = "idrealisateur"><?php echo $nomRealisateur[0] ?></option>
            </select>
            <br>
            Titre :
            <input type="text" name="titre" required>
            <br>
            Annee :
            <input type="number" name="annee" required>
            <br>
            Score :
            <input type="text" name="score" required>
            <br>
            Nombre de votants :
            <input type="number" name="nbrvotants" required>
            <br>
            <input type="reset" value="Réinsialiser" required>  
            <input type="submit" value="Ajouter" required>  
        </form>
    </body>
</html>