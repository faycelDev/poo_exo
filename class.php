<?php

class Etudiant {
    protected $nom;
    protected $prenom;
    protected $dateDeNaissance;
    protected $filieres;
    
    function __construct($nom, $prenom, $dateDeNaissance,$filieres) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->filieres = $filieres;
    }
   
    function set_nom($nom) {
        $this->nom = $nom;
    }
    function set_prenom($prenom) {
        $this->prenom = $prenom;
    }
    function set_filieres($filieres) {
        $this->filieres = $filieres;
    }
    function set_dateDeNaissance($dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;
    }
    function get_nom() {
        return $this->nom;
    }
    function get_prenom() {
        return $this->prenom;
    }
    function get_dateDenaissance() {
        return $this->dateDeNaissance;
    }
    function get_filieres() {
        return $this->filieres;
    }
    function afficher() {
        echo $this->nom. "\n";
        echo $this->prenom. "\n";
        echo $this->dateDeNaissance. "\n";
        foreach ($this->filieres as $filiere) {
            $filiere->afficher();
        }
         
    }
} 


class Filiere {
    public $code;
    public $libelle;

    function __construct($code, $libelle) {
        $this->code = $code;
        $this->libelle = $libelle;
    }

    function set_code($code) {
        $this->code = $code;
    } 
    function set_libelle($libelle) {
        $this->libelle = $libelle;
    } 
           
    function get_code($code) {
       return $this->code; 
    } 
    function get_libelle() {
        return $this->libelle;
    } 

    function afficher() {
       
        echo $this->code. "\n"; 
        echo $this->libelle; 
    }
        
    
}



$filiere1 = new Filiere(100, " médecine ");
$filiere2 = new Filiere(200, " Informatique ");
$filiere3 = new Filiere(300, " éducatif et social ");
$filiere4 = new Filiere(400 ," Architecture ");
$filiere5 = new Filiere(500 ," Commerce ");



$listeFilieres = array($filiere1, $filiere2, $filiere3, $filiere4, $filiere5);

$etudiant1 = new Etudiant("Rachid","bahreini", "20.06.1998", $listeFilieres);

$etudiant1->afficher();
