<?php
/*  get all his movies + role
    get all his roles + movie
    role array?? role => movie
    name getter
    surname getter
      */
    
    include('person.php')
    class Actor extends Person {

        private $_roles;

        public function __construct($surname, $name, $birthdate) {
            parent::__construct($surname, $name, $birthdate);
            $this->_roles = [];
        }

        public function getRoles() {
            return $this->_roles;
        }

        public function addRole($role) {
            array_push($this->_roles, $roles);
        }
    }
?>