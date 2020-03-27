<?php
    class Voiture {
       protected $_make;
       protected $_model;

       public function __construct($make, $model) {
            $this->_make = $make;
            $this->_model = $model;
       }

       public function getInfos() {
           echo 'Marque : '.$this->_make.'<br>Modèle : '.$this->_model.'<br>';
       }
    }
    
    class VoitureElec extends Voiture {
        private $_autonomy;

        public function __construct($make, $model, $autonomy) {
            parent::__construct($make, $model);
            $this->_autonomy = $autonomy;
        }

        public function getInfos() {
            echo 'Marque : '.$this->_make.'<br>Modèle : '.$this->_model.'<br>Autonomie : '.$this->_autonomy.'<br>';
        }
    }

    $v1 = new Voiture('Peugeot', '408');
    $ve1 = new VoitureElec('BMW', 'I3', 100);
    echo $v1->getInfos().'<br>';
    echo $ve1->getInfos().'<br>';
?>