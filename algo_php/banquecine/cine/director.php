<?php
/*  age calculation
    get all his movies
    movies array??
    movies setter
    movies getter
    name getter
    surname getter
      */
    class Director {
        private $_surname;
        private $_name;
        private $_birthdate;
        private $_movies; //??

        public function __construct() {
            $this->_surname = $surname;
            $this->_name = $name;
            $this->_birthdate = $birthdate;
            $this->_movies = [];
        }

        public function getSurname() {
            return $this->_surname;
        }

        public function getName() {
            return $this->_name;
        }

        public function getMovies() { //??
            return $this->_movies;
        }

        public function addMovie($title) { //??
            array_push($this->_movies, $title);
        }

    }
?>