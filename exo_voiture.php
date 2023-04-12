<?php

class Vehicule {
    public $matricule;
    public $annee;
    public $prix;

    function __construct($matricule, $annee, $prix) {
        $this->matricule = $matricule; 
        $this->annee = $annee; 
        $this->prix = $prix; 
    }

    function set_matricule($matricule) {
        $this->matricule = $matricule;
    }
    function set_annee($annee) {
        $this->annee = $annee;
    }
    function set_prix($prix) {
        $this->prix = $prix;
    }

    function get_matricule() {
        return $this->matricule;
    }
    function get_annee() {
        return $this->annee;
    }
    function get_prix() {
        return $this->prix;
    }

    public function intro() {
        echo "Ce vehicule est immatriculé : $this->matricule et il est de de l'annee : $this->annee " .   " elle coûte " .$this->prix.  "\n";
    }
}
    class Camion extends Vehicule { 
       

        function accellerer() {
            echo "le camion a accelerer";
        }
        function demarrer() {
            echo "le camion est demarrer";
        }
        function show() {
            $this->intro();
     }
  
    }
    class Voiture extends Vehicule { 

        function show() {
          $this->intro();
          
        }
        
        function accellerer() {
            echo "la voiture a accelerer ";
        }
        function demarrer() {
            echo " la voiture est demarrer ";
        }
    }
    
    $camion = new Camion("208 ct 13", "1999", "2500£uros", "220", "oui");
    $voiture = new Voiture("152 mw 13", "2009", "3500£uros", "260", "oui");
    $camion->show();
    $voiture->show();
    $voiture->accellerer();
    $camion-> demarrer();
    echo ' ';
    $camion->accellerer();


   