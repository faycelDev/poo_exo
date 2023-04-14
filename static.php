<?php
class Personne {
    // le fait d'utiliser la méthode static sur le $nom tout les noms des autres classe auront le nom de celle modifié.
      public static $nom;  
    public $prenom;                                                                                                                        

    function __construct($nom, $prenom) {

    Personne::$nom = $nom;
    $this->prenom = $prenom;
    }

    static function set_nom($nom){
        Personne::$nom = $nom;
    }
    function set_prenom($prenom){
    $this->prenom = $prenom;
    }
    function get_prenom(){
      return  $this->prenom;
    }
    function get_nom(){
       return  $this->nom;
    }

    function afficher() {
    echo Personne::get_nom(). " ";
    echo $this->prenom . "\n";
    }
}

$personne1 = new Personne ("Tartampion", "Paul");
$personne2 = new Personne ("Dupont", "Moretti");
// $personne1->afficher();
// $personne2->afficher();
// Ici j'ai modifié le nom de classe personne qui est contenu dans la variable $personne1 ce qui fait que le nom de la personne2 sera également Alexander
$personne1->set_nom("Alexander");
echo $personne1::$nom. "\n";
echo $personne2::$nom;
// $personne1->afficher();