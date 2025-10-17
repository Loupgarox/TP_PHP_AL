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
            $idFilm = filter_var($_POST['idfilm'], FILTER_SANITIZE_NUMBER_INT);
            $idRealisateur = filter_var($_POST['idrealisateur'], FILTER_SANITIZE_NUMBER_INT); 
            $titre = filter_var($_POST['titre'], FILTER_DEFAULT);
            $annee = filter_var($_POST['annee'], FILTER_SANITIZE_NUMBER_INT);
            $score = filter_var($_POST['score'], FILTER_SANITIZE_NUMBER_FLOAT);
            $nbrvotants = filter_var($_POST['nbrvotants'], FILTER_SANITIZE_NUMBER_INT);

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

