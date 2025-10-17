<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once 'Livre.php';
            
            //appel à une méthode statique préfixée par le nom de la classe
            //L'opérateur de portée est ::
            echo "Il y a actuellement ". Livre::getnbLivre() ." livre(s)<br/>";
            
            //instanciation d'un nouveau livre
            $unLivre = new Livre(1, "Initiation au PHP objet");
            
            //Appel à une méthode publique d'instance
            //L'opérateur de portée est ->
            echo $unLivre->toString();
            echo "Il y a actuellement ". Livre::getnbLivre() ." livre(s)<br/>";                
            $unLivre->emprunter(18);
            echo $unLivre->toString();
            $unLivre->rendre();
            echo $unLivre->toString();
            
            $unAutreLivre = new Livre(2, "Approfondissement au PHP objet");   
            echo $unAutreLivre->toString();            
            echo "Il y a actuellement ". Livre::getnbLivre() ." livre(s)<br/>";            
        ?>
    </body>
</html>