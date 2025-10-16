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
        <form action="index.php" method="post">
            Identifiant du film :
            <input type="number" name="idfilm" required>
            <br>
            Identifiant du réalisateur :
            <input type="number" name="idrealisateur" required>
            <br>
            Titre :
            <input type="text" name="titre" required>
            <br>
            Annee :
            <input type="number" name="annee" required>
            <br>
            Score :
            <input type="number" name="score" required>
            <br>
            Nombre de votants :
            <input type="number" name="nbrvotants" required>
            <br>
            <input type="submit" value="Ajouter" required>  
        </form>
    </body>
</html>