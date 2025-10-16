<?php
    $user = 'root';
    $pass = '';

    try {
        $connexion = new PDO('mysql:host=localhost;port=3307;dbname=films', $user, $pass);
        echo "<p>Connexion etablie à la base films...</p>";

        //On vérifie que quelque chose a été saisi dans le TextBox numFilm
        if(!empty($_POST['numfilm'])){

            //On vérifie que c'est bien un nombre car on ne fait jamais confiance à l'utilisateur
            //Si le contenu de $_POST['numfilm'] filtré est bien un entier on l'affecte à la variable $numFilm
            //Sinon on affecte false à la variable $numFilm
            $numFilm = filter_var($_POST['numfilm'], FILTER_SANITIZE_NUMBER_INT);

            //on vérifie que la variable n'est pas affectée à false
            if(!$numFilm){
                echo "La valeur saisie n'est pas un nombre entier";
            }
            else{
                //On crée une requête SQL préparée
                //$requete = "select film.id, film.titre from film where id = :numFilm";
                $requete = "select film.id, film.titre, realisateur.nom as realisateur, acteur.nom from distribution join film on distribution.idfilm = film.id join acteur on distribution.idacteur = acteur.id join realisateur on film.idrealisateur = realisateur.id where distribution.idfilm = :numFilm";
                $commande = $connexion->prepare($requete);
                
                //On affecte une valeur au paramètre
                $commande->bindParam(':numFilm',$numFilm);

                //On exécute la commande
                $commande->execute();
                
                //On charge le résultat dans un curseur
                $curseur = $commande->fetchAll();

                if (!$curseur) {
                    echo "<p>Le film n°".$numFilm." n'est pas répertorié</p>";
                }
                else{
                    //Le film existe
                    //Ici on génère du code HTML
                    echo "<br/><p>-->Film n°".$numFilm." trouvé...</p>";
                    echo "<table border=1>" ;
                    echo "<tr><th>Numéro</th><th>Titre</th><th>Réalisateur</th><th>Liste des acteurs</th></tr>";

                    //Pour chaque ligne du curseur...
                    foreach($curseur as $row) {
                        //On crée une ligne et 2 colonnes
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['titre']."</td>";
                        echo "<td>".$row['realisateur']."</td>";
                        echo "<td>".$row['nom']."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        }
        else{
            echo "<p>Veuillez renseigner le numéro de film !</p>";
        }	

        //On libère la connexion
        $connexion = null;

    } 
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

?>

