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


// class Rectangle {
//     public $largeur;
//     public $longeur;

//     function __construct($largeur,$longeur) {

//         $this->longeur = $longeur;
//         $this->largeur = $largeur;
//     }
//     function set_longeur($longeur) {
//         $this->longeur = $longeur;
//     }
//     function set_largeur($largeur) {
//         $this->largeur = $largeur;
//     }

//     function get_longeur() {
//        return $this->longeur;
//     }
//     function get_largeur() {
//         return $this->largeur;
//     }

//     function surface() {
//        return $this->longeur * $this->largeur;
//     }

//     function perimetre() {
//         return ($this->longeur  + $this->largeur) *2 ;
//     }
        
//     }

    class Ville {
        public $nom;
        public $departement;

        function __construct($nom, $departement) {
            $this->nom = $nom;
            $this->departement = $departement;
        }

        function set_nom($nom) {
            $this->$nom = $nom;
        }
        function set_departement($departement) {
            $this->$departement = $departement;
        }

        function get_nom() {
            return $this->nom;
        }
        function get_departement() {
            return $this->departement;
        }
    }
        // function show() {
//        echo $this->nom;  
// echo " ";   
// echo "est dans le departement " . $this->departement;
    //     }
    // }

    class Personnes {
        public $nom;
        public $prenom;
        public $adresse;

        function __construct($nom,$prenom,$adresse) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
        }
        function set_nom($nom) {
            $this->nom = $nom;
        }
        function set_prenom($prenom) {
            $this->prenom = $prenom;
        }
        function set_adresse($adresse) {
            $this->adresse = $adresse;
        }
        
        function get_nom() {
            return $this->nom;
        }
        function get_prenom() {
            return $this->prenom;
        }
        function get_adresse() {
            return $this->adresse;
        }

        function afficher() {
          echo $this->nom;
          echo " ";
          echo $this->prenom;
          echo " ";
          echo "habite a l'adresse : " . $this->adresse;
      
          
        }
    }

// $ville = new Ville ("Marseille", "des bouches du rhone");
$personnes = new Personnes ("Dupont", "Pierre", "12, avenue jean jaures 13007 Marseille");
// echo $ville -> get_nom(); 
// echo " ";   
// echo " est dans le departement " . $ville -> get_departement();    
//  $ville -> show();
//  $personnes -> set_adresse("10,rue de la republique 13002 Marseille");
//  $personnes -> afficher();
// $rectangle = new Rectangle(10,5);
// echo "la longeur est de : ". $rectangle->get_longeur(). "cm";
// echo " ";
// echo "la largeur est de : " . $rectangle->get_largeur(). "cm";
// $surface = $rectangle->get_longeur() * $rectangle->get_largeur();
// echo $rectangle->surface();
// echo$rectangle-> perimetre();

// function superficieCarre ($longueur) {
    
// $superficie = $longueur * 4;
//  echo 'la superficie du carre est de ' . $superficie . " cm "; 
// }
//  superficieCarre(5);

 class Client {
    public $cin;
    public $nom;
    public $prenom;
    public $tel;

    function __construct($cin, $nom, $prenom, $tel) {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    function set_cin($cin) {
        $this->$cin = $cin;
    }
    function set_nom($nom) {
        $this->$nom = $nom;
    }
    function set_prenom($prenom) {
        $this->$prenom = $prenom;
    }
    function set_tel($tel) {
        $this->$tel =$tel;
    }

    function get_cin() {
        return $this->cin;
    }
    function get_nom() {
        return $this->nom;
    }
    function get_prenom() {
        return $this->prenom;
    }
    function get_tel() {
        return $this->tel;
    }

    function afficher() {
        // echo $this->cin;
        // echo " ";
        // echo $this->nom;
        // echo " ";
        // echo $this->prenom;
        // echo " ";
        // echo $this->tel;
    }

 }

 $client = new Client("187vw2410ml", "Paolo", "Jacques", "06.10.25.87.00");

// $client->afficher();

class Compte {
    public $solde;
    public $code;
    public $client;

    function __construct($solde, $code, $client) {
        $this->solde = $solde;
        $this->code = $code;
        $this->client = $client;
    }

   
    function set_client($client) {
        $this->$client = $client;
    }

    function get_solde() {
        return $this->solde;
    }
    function get_code() {
        return $this->code;
    }
    function get_client() {
        return $this->client;
    }
    function debiter($somme) {
        
        $this->solde -= $somme ;
      

    }
    function afficher() {
        echo $this->solde;
        echo " ";
        echo $this->code;
        $this->client->afficher();
        echo "\n";
    }
    function crediter($somme) {
        $this->solde += $somme ;
    }

}

// $compte = new Compte(500, 2022, $client);
// $compte->afficher();
// $compte->debiter(5);
// $compte->afficher();
// $compte->crediter(50);
// $compte->afficher();















// $villa = new Maison (220, 14, 2);
// $villa->set_superficie(400);
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

// echo "la moyenne est : " . $moyenne;


// $nombres = [1, 2, 3, 4, 5, 6, 7, 8, 9] ; 
 
// foreach ($nombres as $nbr){
//     echo $nbr * 2;
// }

class Article {
    public $reference;
    public $designation;
    public $prixHt;
    public $tauxTva;

    function __construct ($reference,$designation, $prixHt, $tauxTva) {
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->tauxTva = $tauxTva;
    }


    function set_reference($reference) {
        $this->reference = $reference;
    }
    function set_designation($designation) {
        $this->designation = $designation;
    }
    function set_prixHt($prixHt) {
        $this->prixHt = $prixHt;
    }
    function set_tauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
    }

    function get_reference() {
        return $this->reference;
    }
    function get_designation() {
        return $this->designation;
    }
    function get_PrixHt() {
        return $this->prixHt;
    }
    function get_tauxTva() {
        return $this->tauxTva;
    }
    function afficher() {
      echo " -Référence : " . $this->reference . "\n";
      echo " ";
      echo "-Désignation : " . $this->designation . "\n";
      echo " ";
      echo "-prix ht : ". $this->prixHt. "£uros" . "\n";
      echo " ";
      echo "-la tva est de : " . $this->tauxTva . "%". "\n";
    
    }
    function calculerPrixTtc() {
     $prixTtc =   $this->prixHt +  $this->prixHt * ($this->tauxTva / 100);
        return $prixTtc;
    }
   

}

$article = new Article(111, "ATA", 100, 20);
$article2 = new Article(200, "ATA", 1000, 20);
$article->afficher();
// $article2->afficher();
echo " ";
echo "-le prix ttc est de : " . $article2->calculerPrixTtc(). " £uros"."\n"."\n";

class Rectangle2 {
    public $longueur;
    public $largeur;

    function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    function set_longueur($longueur) {
        $this->longueur = $longueur;
    }
    function set_largeur($largeur) {
        $this->largeur = $largeur;
    }

    function get_longueur() {
        return $this->longueur;
    }
    function get_largeur() {
        return $this->largeur;
    }

  
    function perimetre() {
        return  ($this->longueur + $this->largeur) * 2;
    
    }
    function aire() {
        $aire = $this->longueur * $this->largeur;
        return $aire;
    }

    function verify() {
        if($this->longueur !== $this->largeur) {
            echo "-Ce n'est pas un carré" . "\n" ;
        }elseif($this->longueur == $this->largeur) {
            echo "-Ceci est un carré et pas un rectangle" . "\n";
        }
    }

    function show() {
        echo "-la longueur du rectangle est de : " .$this->longueur . " cm" . "\n";
        echo "-la largeur du rectangle est de : [" .$this->largeur . " cm]" . "\n";
    
    }


   
}

$rectangle = new Rectangle2(3,4);
$rectangle2 = new Rectangle2(5,5);
$rectangle3 = new Rectangle2(10,12);
$rectangle->show() . "\n";
echo "-le permimètre du rectangle est de : " . $rectangle->perimetre() . " cm " . "\n";
echo "-l'aire du rectangle est de : " . $rectangle->aire() . " cm" . "\n";
$rectangle->verify() . "\n";
echo "\n";
$rectangle2->show() . "\n";
echo "-le permimètre du rectangle est de : " . $rectangle2->perimetre() . " cm " . "\n";
echo "-l'aire du rectangle est de : " . $rectangle2->aire() . " cm" . "\n";
$rectangle2->verify();
echo "\n";


$rectangle3->show() . "\n";
echo "-le permimètre du rectangle est de : " . $rectangle3->perimetre() . " cm " . "\n";
echo "-l'aire du rectangle est de : " . $rectangle3->aire() . " cm" . "\n";
$rectangle3->verify(). "\n";
echo "-le permimètre du rectangle est de : " . $rectangle3->perimetre() . " cm " . "\n";
echo "-l'aire du rectangle est de : " . $rectangle3->aire() . " cm" . "\n";