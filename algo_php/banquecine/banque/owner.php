<?php
    class Owner {
        private $_surname;      //owner's surname
        private $_name;         //owner's name
        private $_birthdate;    //owner's birthdate
        private $_city;         //owner's city
        private $_accounts;     //all accounts owned

        public function __construct($surname, $name, $birthdate, $city) {
            $this->_surname = $surname;
            $this->_name = $name;
            $this->_birthdate = $birthdate;
            $this->_city = $city;
            $this->_accounts = [];
        }

        public function getSurname() {
            return $this->_surname;
        }

        public function getName() {
            return $this->_name;
        }

        public function addAccount($label) {
            array_push($this->_accounts, $label);
        }

        public function calcAge($birthdate) { //calculate the age (in years) of an owner from his birthdate
            $bday = new DateTime($birthdate);
            $today = new DateTime();
            $age = $bday->diff($today);
            return $age->format('%y ans');
        }

        public function infoOwner() { //display all relevant information about the owner
            echo 'Nom : '.$this->_surname.'  Prénom : '.$this->_name.'<br>Age : '.$this->calcAge($this->_birthdate).'<br>Ville : '.$this->_city.'<br> Comptes :<ul>';
            foreach ($this->_accounts as $value) {
                echo "<li>$value</li>";
            }
            echo '</ul>';
        }
    }
?>