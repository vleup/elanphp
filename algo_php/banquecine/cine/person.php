<?php
    class Person {
        private $_surname;
        private $_name;
        private $_birthdate;

        public function __construct() {
            $this->_surname = $surname;
            $this->_name = $name;
            $this->_birthdate = $birthdate;
        }

        public function getSurname() {
            return $this->_surname;
        }

        public function getName() {
            return $this->_name;
        }
    }
?>