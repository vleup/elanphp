<?php
/*  duration calculation
    cast array?? role => actor
    show info
    title getter
      */
    class Movie {
        private $_title;
        private $_release;
        private $_length;
        private $_about;
        private $_director;
        private $_genre;
        private $_cast;

        public function __construct($title, $release, $length, $about, $director, $genre) {
          $this->_title = $title;
          $this->_release = $release;
          $this->_length = $length;
          $this->_about = $about;
          $this->_director = $director;
          $this->_genre = $genre;
          $this->_cast = [];
        }

        public function getTitle() {
          return $this->_title;
        }

        public function getRelease() {
          return $this->_release;
        }

        public function getAbout() {
          return $this->_about;
        }

        public function getDirector() {
          return $this->_director;
        }

        public function getGenre() {
          return $this->_genre;
        }

        public function getCast() {
          return $this->_cast;
        }

        public function lengthToHours($length) { //calculates the duration of a movie in hours
          $hours = floor($length/60);
          return $hours;
        }

        public function addToCast($role, $actor) {
          $this->_cast[$role->getRole()] = $actor;
        }

        public function showInfo() { //displays all relevant information about a movie
          echo 'Titre : 
                Année de sortie : 
                Durée : 
                Genre : 
                Acteurs : 
                Réalisateur : ';
        }
    }
?>