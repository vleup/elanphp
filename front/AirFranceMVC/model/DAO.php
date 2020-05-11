<?php
    //DAO est abstraite car nous ne souhaitons pas pouvoir faire new DAO() où que ce soit !
    //cette classe doit être étendue par tous les modèles 
    abstract class DAO{
        
        private static $dbname = "user";
        private static $dbhost = "127.0.0.1:3306";
        private static $dbuser = "root";
        private static $dbpass = "";
        
        //l'instance de PDO sera ici, elle est protected pour que seuls les modèles s'en servent
        protected static $connexion;
        
        protected static function connect() {
            //connexion à la BDD
            try{
                self::$connexion = new PDO(
                    'mysql:host='.self::$dbhost.';dbname=user',
                    self::$dbuser,
                    self::$dbpass,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            }
            catch(Exception $e){
                echo $e->getMessage();
                die();
            }
        }        
    }