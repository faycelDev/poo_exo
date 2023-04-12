<?php

class Employe {
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $dateDeNaissance;

    public  function __construct($matricule,$nom,$prenom,$dateDeNaissance) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
    }

    function set_matricule($matricule) {
        $this->matricule = $matricule;
    }
    function set_nom($nom) {
        $this->nom = $nom;
    }
    function set_prenom($prenom) {
        $this->prenom = $prenom;
    }
    function set_dateDeNaissance($dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    function get_matricule() {
        return $this->matricule;
    }
    function get_nom() {
        return $this->nom;
    }
    function get_prenom() {
        return $this->prenom;
    }
    function get_dateDeNaissance() {
        return $this->dateDeNaissance;
    }
    function afficher() {
        echo "son num de matricule est : " . $this->matricule ."\n";
        echo "son nom est : " . $this->nom ."\n";
        echo "son prenom est : " . $this->prenom ."\n";
        echo "sa date de naissance est : " . $this->dateDeNaissance ."\n";
 
    }
}

class Ouvrier extends Employe {
    protected $dateEntree;

    function __construct($matricule,$nom,$prenom,$dateDeNaissance,$dateEntree) {
    parent::__construct($matricule,$nom,$prenom,$dateDeNaissance); 
    
        $this->dateEntree = $dateEntree;

    }
    function get_dateEntree() {
        return $this->dateEntree;
    }
    function get_salaire() {

        $salaire = 2500;
        $anciennete = 2023 - $this->dateEntree;
        $salaire +=  $anciennete * 100;
        if ($salaire > 2500 * 2) {
            $salaire = 5000;
        }

        return $salaire;
       
    }
    
    function afficher()
    {
        echo "sont salaire est de : " . $this->get_salaire()."$"."\n";
        parent::afficher();
    }
    
}

class Cadre extends Employe {
    protected $indiceSalaire;

     function __construct($matricule,$nom,$prenom,$dateDeNaissance,$indiceSalaire) {
        parent::__construct($matricule,$nom,$prenom,$dateDeNaissance);
        $this->indiceSalaire = $indiceSalaire;
    }
    function get_salaire() {
       if ($this->indiceSalaire == 1) {
        $salaire = 13000;
       }elseif($this->indiceSalaire == 2) {
        $salaire = 15000;
       }elseif($this->indiceSalaire == 3) {
        $salaire = 17000;
       }elseif($this->indiceSalaire == 4) {
        $salaire = 20000;
       }
       return $salaire;
    }
    
    function afficher()
    {
        echo "sont salaire est de : " . $this->get_salaire()."$"."\n";
        parent::afficher();
    }

}

class Patron extends Employe {
    protected $chiffreAffaire;
    protected $pourcentage;

    function __construct($matricule,$nom,$prenom,$dateDeNaissance,$chiffreAffaire,$pourcentage) {
        parent::__construct($matricule,$nom,$prenom,$dateDeNaissance); 
     
        $this->chiffreAffaire = $chiffreAffaire;
        $this->pourcentage = $pourcentage;
       
    }
    function get_salaire() {
        $salaire = $this->chiffreAffaire * $this->pourcentage / 100;
        return $salaire;
    }

    function afficher()
    {
        echo "sont salaire est de : " . $this->get_salaire()."$"."\n";
        parent::afficher();
    }
 
}


$ouvrier = new Ouvrier('20', "paul", "jean",'20.06.2000', 2020 );
$cadre = new Cadre('20', "paul", "jean","10.05.1976",'20.06.2000',3 );
$patron = new Patron('20', "paul", "jean",'20.06.2000', 100000, 30 );


$patron->afficher();
$cadre->afficher();
$ouvrier->afficher();


