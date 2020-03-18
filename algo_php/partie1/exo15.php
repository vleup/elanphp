<?php
    class Personne {
        private $_name;
        private $_firstname;
        private $_bdate;

        public function __construct($name, $firstname, $bdate) {
            $this->_name = $name;
            $this->_firstname = $firstname;
            $this->_bdate = new DateTime($bdate);
        }

        public function getName() {
            return $this->_name;
        }

        public function getFirstname() {
            return $this->_firstname;
        }

        public function getAge() {
            $now = new DateTime();
            return $this->_bdate->diff($now)->format('%y');
        }
    }
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
    echo $p1->getFirstname()." ".$p1->getName()." a ".$p1->getAge()." ans<br>";
    echo $p2->getFirstname()." ".$p2->getName()." a ".$p2->getAge()." ans";
?>