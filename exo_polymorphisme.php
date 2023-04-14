<?php

abstract class Personne {
    public $nom;
    public $prenom;
    public $age;

    function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age. "\n";
    }

    function afficher() {
           
        echo  $this->nom;
         echo $this->prenom;
        echo $this->age;
    
   
}
}
    class Employe extends Personne {
        public $salaire;
        function __construct($nom, $prenom, $age, $salaire) {
            parent::__construct($nom, $prenom, $age);
            $this->salaire = $salaire;
        }
        function afficher() {
            parent::afficher();
                echo $this->salaire. "\n";
            
        }
    }

    class Etudiant extends Personne {
        public $cne;
        function __construct($nom, $prenom, $age, $cne) {
            parent::__construct($nom, $prenom, $age);
            $this->cne = $cne;
         
        }
        function afficher() {
           
            parent::afficher();
            
           
        }
    }

    class Professeur extends Employe {
        public $matiere;
        function __construct($nom, $prenom, $age, $salaire, $matiere) {
            parent::__construct($nom, $prenom, $age, $salaire,$matiere);
            $this->matiere = $matiere;
        }

        function afficher() {
            parent::afficher();
            echo $this->matiere;
        }
    }

$personne1 = new Employe(" jean ", " claude ", 50 , 1950);    
$personne2 = new Etudiant(" paul ", 20, 2300, " 10.12b ");    
$personne3 = new Professeur(" Louis ", " pascal ", 48, 2200, " geographie ");    

$personne1->afficher();
echo " ";
$personne2->afficher();
echo " ";
$personne3->afficher();