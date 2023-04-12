<?php

class Batiment {

        protected $adresse;

        function __construct($adresse) {
            $this->adresse = $adresse;
        }

        function set_adresse($adresse) {
            $this->adresse = $adresse;
        }

        function get_adresse() {
            return $this->adresse;
        }

        function afficher() {
            echo "l'adresse du batiment est : ". $this->adresse."\n";
          
        }

    }

    class Maison extends batiment {
        private $nbPiece;

        function __construct($adresse,$nbPiece) {
            $this->nbPiece = $nbPiece;
            $this->adresse = $adresse;
        }

        function set_nbPiece($nbPiece) {
            $this->nbPiece = $nbPiece;
        }

        function get_nbPiece() {
            return $this->nbPiece;
        }

        function afficher() {
            echo "l'adresse de la maison est : ". $this->adresse."\n";
            echo "la maison comporte : ". $this->nbPiece . "pieces";
        }
    }
    


$batiment = new Batiment ("10, rue pierre palma 13003 Marseille");
$maison = new Maison("14, rue jean jaures","10");
$batiment->afficher();
$maison->afficher();