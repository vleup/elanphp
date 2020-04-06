<?php
/*  get all his movies + role
    get all his roles + movie
    role array?? role => movie
    name getter
    surname getter
      */
    class Actor {
        private $_surname;
        private $_name;
        private $_birthdate;
        private $_roles;

        public function __construct($surname, $name, $birthdate) {
            $this->_surname = $surname;
            $this->_name = $name;
            $this->_birthdate = $birthdate;
            $this->_roles = [];
        }

        public function getSurname() {
            return $this->_surname;
        }

        public function getName() {
            return $this->_name;
        }

        public function getRoles() {
            return $this->_roles;
        }

        public function addRole($role) {
            array_push($this->_roles, $roles);
        }
    }
?>