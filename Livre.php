<?php

class Livre {
    //Attributs
    private $num;
    private $titre;
    private $dispo;
    private $emprunteur;

    //Attribut statique
    private static $nbLivre = 0;	//initialisation initiale
    
    //Constructeur
    function __construct($num, $titre)
    {
        $this->num = $num;
        $this->titre = $titre;
        $this->dispo = true;
        $this->emprunteur = 0;

        //Incrémentation du nombre de livre
        //self fait référence à la classe en cours (donc Livre)
        //l'opérateur de portée pour manipuler un attribut statique est ::
        self::$nbLivre++;
    }
    
    //Accesseurs
    public function getTitre()
    {
        return $this->titre;
    }
    
    public static function getNbLivre()
    {
        return self::$nbLivre;
    }    
    
    //Méthodes
    public function estDispo()
    {
        return $this->dispo;
    }
    
    public function emprunter($emprunteur)
    {
        $this->emprunteur = $emprunteur;
        $this->dispo = false;
    }
    
    public function rendre()
    {
        $this->emprunteur = 0; 
        $this->dispo = true;        
    }
    
    public function toString()
    {
        $res = "----------------------<br/>";
        $res .= "Numéro : ". $this->num . "<br/>";
        $res .= "Titre : ". $this->titre . "<br/>";
        if($this->dispo)
        {
            $res .= "Disponible" . "<br/>";
        }
        else
        {
            $res .= "Emprunté à l'utilisateur " . $this->emprunteur . "<br/>";
        }
        return $res;
    }
}