<?php
/*  age calculation ??
    get all his movies
    movies array??
    movies setter
    movies getter
    name getter
    surname getter
      */

    include('person.php')
    class Director extends Person {

        private $_movies; //??

        public function __construct($surname, $name, $birthdate) {
            parent::__construct($surname, $name, $birthdate);
            $this->_movies = [];
        }

        public function getMovies() { //??
            return $this->_movies;
        }

        public function addMovie($title) { //??
            array_push($this->_movies, $title);
        }

    }
?>