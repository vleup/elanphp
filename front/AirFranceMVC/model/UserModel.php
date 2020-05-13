<?php
    require_once "DAO.php";

    class UserModel extends DAO{

        public function __construct() {
            //la propriété connexion contiendra une instance de PDO toute fraîche
            //grâce au DAO
            parent::connect();
        }

        public function getUser($form_username) {
            try{
                $sql = "SELECT username, password 
                        FROM client 
                        WHERE LOWER(username) = :name";

            //préparation de la requète dans le serveur       
                $stmt = self::$connexion->prepare($sql);
            //injection des paramètres
                $username = strtolower($form_username);
                $stmt->bindParam("name", $username);
            //execution
                $stmt->execute();
            //on retourne l'utilisateur en base de données
                return $stmt->fetch();
            }
            catch(Exception $e){
                return $e->getMessage();
                die();
            }
            
        }

        public function addUser($username, $email, $hash) {
            try{
                $sql = "INSERT INTO client (username, email, password)
                        VALUES (:name, :mail, :pass);";

            //préparation de la requète dans le serveur       
                $stmt = self::$connexion->prepare($sql);
            //injection des paramètres
                $stmt->bindParam("name", $username);
                $stmt->bindParam("mail", $email);
                $stmt->bindParam("pass", $hash);
            //execution
                return $stmt->execute();
                
            }
            catch(Exception $e) {
                return $e->getMessage();
                die();
            }
            
        }
    }