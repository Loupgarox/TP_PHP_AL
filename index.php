<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Saisir les informations de l'annonce</h1>
        <form action="traiterAnnonce.php" method="POST">

            <p>
                Catégorie <select name ="categorie">
                    <option>Véhicule</option>
                    <option>Immobilier</option>                    
                    <option>Loisir</option>
                    <option>Pour la maison</option>
                    <option>Services</option>                
                </select>
            </p>
            
            <p>Titre <input type="text" name="titre" required></p>

            <p>Description <br/><textarea name ="description" placeholder="Décrire l'objet à vendre ici..." required></textarea></p>

            <p>Prix <input type="number" name="prix" required></p>     
            
            <p>Etat <input type="radio" name="etat" value="neuf"> Neuf <input type="radio" name="etat" value="bon"> Bon <input type="radio" name="etat" value="usage"> Usagé </p>            
            
            <p>Livraison incluse dans le prix <input type="checkbox" name="livraison" value="incluse"> </p>
            
            <p>Adresse mail <input type="email" id="mail" name="mail" required></p>
            
            <input type="submit" value="Poster l'annonce">
        </form>
    </body>
</html>
