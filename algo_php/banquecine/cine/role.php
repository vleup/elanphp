<?php
/*  actors who played that role and in what movie
    role getter
    */
    class Role {
        private $_role;
        private $_movies;   //??
        private $_actors;   //??

        public function __construct($role) {
            $this->_genre = $role;
            $this->_movies = [];    //??
            $this->_actors = [];    //??
        }

        public function getRole() {
            return $this->_role;
        }

        public function getMovies() {
            return $this->_movies;
        }

        public function getActors() {
            return $this->_actors;
        }

        public function addMovie($title) {
            array_push($this->_movies, $title);
        }

        public function addActor($actor) {
            array_push($this->_actors, $actor);
        }
    }
?>