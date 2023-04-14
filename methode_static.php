<?php

class Vehicule {

    public static $marque;
    public $annee;

    function __construct($marque, $annee) {
        Vehicule::$marque = $marque;
        $this->annee = $annee;
    }

    static function set_marque($marque) {
        Vehicule::$marque = $marque;
    }
    function set_annee($annee) {
        $this->annee = $annee;
    }

    function get_marque() {
        return $this->marque;
    }    
    function get_annee() {
        return $this->annee;
    }
    function afficher() {
        echo Vehicule::get_marque();
        echo $this->annee;
    }
        
    
}
$vehicule1 = new Vehicule ("porshe", 2018);
$vehicule2 = new Vehicule ("audi", 2012);
$vehicule1::set_marque("peugeot");
echo $vehicule1::$marque . "\n";
echo $vehicule2::$marque;

