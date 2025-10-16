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
        <h1>Interroger la base des films</h1>
        <form action="select.php" method="post">
            Numéro du film à rechercher : 
            <input type="text" name="numfilm">
            <input type="submit" value="Rechercher">  
        </form>
        <form action="formulaireInsert.php" method="post">
            <input type="submit" value="Ajouter un film">  
        </form>
    </body>
</html>
