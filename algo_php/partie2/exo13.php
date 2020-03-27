<?php
    class Voiture {
        private $_marque;
        private $_modele;
        private $_nbPortes;
        private $_vitesseActuelle;
        private $_running;

        public function __construct($marque, $modele, $nbPortes) {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = 0;
            $this->_running = false;
        }

        public function getMarque() {
            return $this->_marque;
        }

        public function setMarque($marque) {
            $this->_marque = $marque;
        }

        public function getModele() {
            return $this->_modele;
        }

        public function setModele($modele) {
            $this->_modele = $modele;
        }

        public function getNbPortes() {
            return $this->_nbPortes;
        }

        public function setNbPortes($nbPortes) {
            $this->_nbPortes = $nbPortes;
        }

        public function getVitesseActuelle() {
            return $this->_vitesseActuelle;
        }

        public function setVitesseActuelle($_vitesseActuelle) {
            $this->_vitesseActuelle = $_vitesseActuelle;
        }

        public function demarrer() {
            $this->_running = true;
            echo 'Le véhicule '.$this->_marque.' '.$this->_modele.' démarre<br>';
        }
        
        public function accelerer($speed) {
            if ($this->_running == true) {
                $this->_vitesseActuelle = $this->_vitesseActuelle + $speed;
                echo 'Le véhicule '.$this->_marque.' '.$this->_modele." accélère de $speed km/h<br>";
            } else {
                echo 'Le véhicule '.$this->_marque.' '.$this->_modele." veut accélerer de $speed<br>Pour accélerer il faut démarrer le véhicule ".$this->_marque.' '.$this->_modele.'<br>';
            }
        }

        public function stopper() {
            $this->_running = false;
            $this->_vitesseActuelle = 0;
            echo 'Le véhicule '.$this->_marque.' '.$this->_modele.' est stoppé<br>';
        }

        public function info() {
            echo 'Nom et modèle du véhicule : '.$this->_marque.' '.$this->_modele.'<br>Nombre de portes : '.$this->_nbPortes.'<br>';
            if ($this->_running == true) {
                echo 'Le véhicule '.$this->_marque.' est démarré<br>';
            } else {
                echo 'Le véhicule '.$this->_marque." est à l'arrêt<br>";
            }
            echo 'Sa vitesse actuelle est de : '.$this->_vitesseActuelle.' km/h<br>';
            
        }

        public function ralentir($speed) {
           if ($this->_running == true) {
                $this->_vitesseActuelle = $this->_vitesseActuelle - $speed;
                echo 'Le véhicule '.$this->_marque.' '.$this->_modele." ralentit de $speed km/h<br>";
            } else {
                echo 'Le véhicule '.$this->_marque.' '.$this->_modele." veut ralentir de $speed<br>Pour accélerer il faut démarrer le véhicule".$this->_marque.' '.$this->_modele.'<br>';
            } 
        }
    }
    $v1 = new Voiture('Peugeot', '408', 5);
    $v2 = new Voiture('Citroën', 'C4', 3);
    function testVitesse($car) {
        echo 'La vitesse du véhicule '.$car->getMarque().' '.$car->getModele().' est de '.$car->getVitesseActuelle().' km/h<br>';
    }
    $v1->demarrer();
    $v1->accelerer(50);
    $v2->demarrer();
    $v2->stopper();
    $v2->accelerer(20);
    $v1->ralentir(30);
    testVitesse($v1);
    testVitesse($v2);
    echo '<br>Infos véhicule 1<br>*****************<br>';
    $v1->info();
    echo '<br>Infos véhicule 2<br>*****************<br>';
    $v2->info();
?>