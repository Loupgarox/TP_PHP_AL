<?php
    $user = 'root';
    $pass = '';

    try {
        $connexion = new PDO('mysql:host=localhost;port=3306;dbname=films', $user, $pass);
        echo "<p>Connexion etablie à la base films...</p>";

        //On vérifie que quelque chose a été saisi dans le TextBox numFilm
        if(!empty($_POST['idfilm']) && !empty($_POST['idrealisateur']) && !empty($_POST['titre']) && !empty($_POST['annee']) && !empty($_POST['score']) && !empty($_POST['nbrvotants'])){

            //On vérifie que c'est bien un nombre car on ne fait jamais confiance à l'utilisateur
            //Si le contenu de $_POST['numfilm'] filtré est bien un entier on l'affecte à la variable $numFilm
            //Sinon on affecte false à la variable $numFilm
            $idFilm = $_POST['idfilm'];
            $idRealisateur = $_POST['idrealisateur'];
            $titre = $_POST['titre'];
            $annee = $_POST['annee'];
            $score = $_POST['score'];
            $nbrvotants = $_POST['nbrvotants'];

            //On crée une requête SQL préparée
            $requete = "insert into film(id, titre, annee, score, nbvotant, idrealisateur) VALUES
            ('$idFilm', '$titre', '$annee', '$score', '$nbrvotants', '$idRealisateur')";
            $commande = $connexion->prepare($requete);

            //On exécute la commande
            $commande->execute();
            echo "Le film a bien été ajouter";
        }
        else{
            echo "<p>Veuillez remplir les champs obligatoires !</p>";
        }	

        //On libère la connexion
        $connexion = null;

    } 
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

?>

