<?php

class CompteBancaire {
    protected $soldes;
    protected $code;

    function __construct($soldes,$code) {
        $this->soldes = $soldes;
        $this->code = $code;
    }

  function  set_soldes($soldes){
        $this->soldes = $soldes;
    }
    function set_code($code) {
        $this->code = $code;
    }

    function get_soldes(){
        return $this->soldes;
    }
    function get_code(){
        return $this->code;
    }
    function afficher() {
       echo "son soldes s'élève à : " . $this->soldes . " euros " . "\n";
       echo "son code est : " . $this->code;
    }
}



class CompteEpargne extends CompteBancaire {
    function __construct($soldes,$code) {
     parent::__construct($soldes,$code); 
     
    }
    function tauxInteret() {
          $tauxInteret = $this->soldes * 6 / 100;
          return $tauxInteret;
    }
    
    function afficher(){
        parent::afficher();
    }
}


    class ComptePayant extends CompteBancaire {
        function __construct($soldes,$code) {
         parent::__construct($soldes,$code);  
        
        }
        function afficher(){
            parent::afficher();
           echo "le nouveau soldes est de : " . $this->soldes; 
          
        }

        function deposer($depot){
        $this->soldes += $depot;
        $this->soldes -= 5;
        }
        function retirer($retirer){
        $this->soldes -= $retirer;
        $this->soldes -= 5;
        }
    }



$compteBancaire = new CompteBancaire("2000", 10.01);
$compteEpargne = new CompteEpargne("1500", 14.09);
$comptePayant = new ComptePayant("3000", 18.11);
echo " ";

$comptePayant->afficher();
$comptePayant->deposer(100);
$comptePayant->afficher();
$comptePayant->retirer(200);
$comptePayant->afficher();
echo " \n";
echo $compteEpargne->tauxInteret();



