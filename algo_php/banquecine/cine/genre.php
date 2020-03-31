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

        public function addMovie($movie) {
            array_push($this->_movies, $movie);
        }

        public function getMovies() {
            echo '<ul>';
            foreach ($this->_movies as $value) {
                echo "<li>$value</li>"
            }
            echo '</ul>';
        }
    }
?>