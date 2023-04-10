<?php
class Fruit {
    //proprietés
    public $name;
    public $color;

    //methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;

    }
}

//instanciation
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('apple');
$banana->set_name('banana');

// echo $apple->get_name();
// echo $banana->get_name();



class Personne {
    
    public $age;
    public $taille;
    public $nom;
    public $poids;
    public $nationalite;
    function __construct($age, $taille, $nom, $poids, $nationalite) {
        $this->age = $age;
        $this->taille = $taille;
        $this->nom = $nom;
        $this->poids = $poids;
        $this->nationalite = $nationalite;
       
    }
    function set_age($age) {
        $this->age = $age;
    }
    function set_taille($taille) {
        $this->taille = $taille;
    }

    function get_age() {
        return $this->age;
    }
    function get_nom() {
        return $this->nom;
    }
    function get_taille() {
        return $this->taille;
    }
    function get_poids() {
        return $this->poids;
    }
    function get_nationalite() {
        return $this->nationalite;
    }
}

$faycel = new Personne(28, 1.80, "faycel", 90, "marocaine" );
$youssef = new Personne(32, 1.80, "youssef", 80, "marocaine");
$faycel->set_age(28);
$youssef->set_age(32);
$youssef->set_taille(1.77);


// echo $youssef->get_age();
// echo $youssef->get_nom();
// echo " ";
// echo $youssef->get_taille();
// echo " ";
// echo $youssef->get_poids();
// echo " ";
// echo $youssef->get_nationalite();
// $youssef->set_age(107);
// echo $youssef->get_age();
// echo $youssef->get_taille();
// echo $youssef->get_age();
// echo " ";
// echo $faycel->get_age();

// var_dump($youssef);

class Voiture {

    public $color;
    public $poids;
    public $longueur;

    function __construct($color, $poids, $longueur) {
        $this->color = $color;
        $this->poids = $poids;
        $this->longueur = $longueur;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function set_poids($poids) {
        $this->poids = $poids;
    }
    function set_longueur($longueur) {
        $this->longueur = $longueur;
    }
    function get_color() {
        return $this->color;
    }
    function get_poids() {
        return $this->poids;
    }
    function get_longueur() {
        return $this->longueur;
    }     
    
}
// $mercedes = new Voiture ('rouge', 2, 4 );
// $mercedes->set_color('bleu');
// echo $mercedes->get_color();
// echo $mercedes->set_longueur(10);
// echo " ";
// echo $mercedes->get_longueur();


class Maison {
    public $superficie;
    public $nbrPiece;
    public $nbrEtage;

    function __construct($superficie,$nbrPiece,$nbrEtage) {
        $this->superficie = $superficie;
        $this->nbrPiece = $nbrPiece;
        $this->nbrEtage = $nbrEtage;
    }

    function set_superficie($superficie) {
        $this->superficie = $superficie;
    }
    function set_nbrPiece($nbrPiece) {
        $this->nbrPiece = $nbrPiece;
    }
    function set_nbrEtage($nbrEtage) {
        $this->nbrEtage = $nbrEtage;
    }

    function get_superficie() {
        return $this->superficie;
    }
    function get_nbrPiece() {
        return $this->nbrPiece;
    }
    function get_nbrEtage() {
        return $this->nbrEtage;
    }
}

$villa = new Maison (220, 14, 2);
$villa->set_superficie(400);
// echo $villa->get_superficie();
// echo $villa->get_nbrPiece();


// function calcul($nombre) {
//    $nombre = 9; 
// for ($i = 0; $i < $nombre; $i++){
//     echo  $i;
// }
// }
// echo calcul($nombre);


$tableau = [10, 12, 20, 6];
   $somme = 0; 
foreach ($tableau as $number ){
 $somme += $number;
  
};

$moyenne = $somme / count($tableau);

echo "la moyenne est : " . $moyenne;


// $nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9] ; 
 
// foreach ($nombres as $nbr){
//     echo $nbr * 2;
// }


