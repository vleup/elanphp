<?php
/*  actors who played that role and in what movie
    role getter
    */
    class Role {
        private $_role;
        private $_movies;   //??
        private $_actors;   //??

        public function __construct($genre) {
            $this->_genre = $genre;
            $this->_movies = [];    //??
            $this->_actors = [];    //??
        }

        public function getRole() {
            return $this->_role;
        }
    }
?>