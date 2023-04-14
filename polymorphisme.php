<?php



abstract class Animal {
    protected $nom;

    
    function __construct($nom) {
        $this->nom = $nom;
       
       
    }

   abstract function crier(); 
}

    class Chien extends Animal{
        public function crier() {
            echo "-Le chien aboie"."\n";
        }
    }
  

        function faireCrier($animal) {
            $animal->crier();
        }
    

  $animal1 = new Chien("pueblo");  
  $animal1->crier();
  $animal2->crier();

