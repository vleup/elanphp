<?php
/*  get all movies of that genre
      */
    class Genre {
        private $_genre;
        private $_movies;

        public function __construct() {
            $this->_genre = $genre;
            $this->_movies = [];
        }

        public function getGenre() {
            return $this->_genre;
        }

        public function addMovie($movie) {
            array_push($this->_movies, $movie);
        }

        public function getMovies() {
            return $this->_movies;
        }
    }
?>