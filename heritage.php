<?php

class Fruit {
    public $color;
    public $nom;

    public function __construct($color, $nom) {
        $this->color = $color;
        $this->nom = $nom;
    }
    public function intro() {
        echo "Ce fruit est une:   $this->nom; et il est de couleur $this->color" . "\n";
    }
}
    class Strawberry extends Fruit {  
            public $forme;
            public $poids;
        public function __construct($color, $nom, $forme, $poids) {
            $this->color = $color;
            $this->nom = $nom;
            $this->forme = $forme;
            $this->poids = $poids;
        }
        public function message() {
            echo "Am a fruit or berry ? \n";
        }

        function show() {
           $this->intro();
            echo "Cette fraise est : $this->forme; et elle pèse $this->poids";
        }
    }


    $stawberry = new Strawberry("red", 'fraise', 'ovale', '20 grammes');
    $stawberry->show();

    