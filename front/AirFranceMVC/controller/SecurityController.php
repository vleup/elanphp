<?php
    require_once("model/UserModel.php");

    class SecurityController{
        
        private $model;
        
        public function __construct() {
            //on instancie le modèle directement
            $this->model = new UserModel();
        }
        
        public function index() {
           
            //on servira home si pas d'utilisateur connecté
            $view = "home.php";
            if(isset($_SESSION['user'])){
                //on servira welcome si connecté
                $view = "welcome.php";
            }
            
            return [
                "view" => $view
            ];
        }
        
        public function login() {
            //si on arrive ici avec un formulaire rempli
            if(!empty($_POST)){
                //on demande au modèle de nous récupérer un possible utilisateur portant ce nom
                $user = $this->model->getUser($_POST['username']);
                //si $user n'est pas false
                if($user){
                    //si son mot de passe est le même qu'attendu
                    if(password_verify($_POST['password'], $user['password'])){
                         //on met l'utilisateur en session, il est connecté !
                        $_SESSION['user'] = $user;
                        //et on renvoie vers la page d'accueil
                        header("Location:?action=index");
                        die();
                    }
                    //erreur de mot de passe pas bon !
                }
                //erreur, l'utilisateur n'existe pas en base de données
            }
            //dans tous les autres cas, on rend la vue connexion
            return [
                "view" => "login.php"
            ];
        }
        
        public function register() {
            
            if(!empty($_POST)) {
                $f_username = trim(filter_input(INPUT_POST, 'username', FILTER_VALIDATE_REGEXP, [
                    'options' => array('regexp'=>'/[A-Za-z0-9]{4,32}/')
                ]));
                $f_email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
                $f_password1 = filter_input(INPUT_POST, 'password1', FILTER_VALIDATE_REGEXP, [
                    'options' => array('regexp'=>'/[A-Za-z0-9]{6,32}/')
                ]);
                $f_password2 = filter_input(INPUT_POST, 'password2', FILTER_VALIDATE_REGEXP, [
                    'options' => array('regexp'=>'/[A-Za-z0-9]{6,32}/')
                ]);
                
                if ($f_username && $f_email && $f_password1 && $f_password2) {
                    if(!$this->model->getUser($f_username)){
                        if($_POST['password1'] === $_POST['password2']){
                            $hash = password_hash($_POST['password1'], PASSWORD_ARGON2I);
                            if($this->model->addUser($f_username, $f_email, $hash)){
                                header("Location:?action=connexion");
                                die();
                            }
                            //erreur d'insertion en base de données
                        }
                        //erreur de mots de passe pas identiques !
                    }
                    //erreur d'utilisateur déjà existant
                }
                //erreur de champ manquant dans le formulaire
            }
            
            return [
                "view" => "register.php"
            ];
        }
        
        public function logout() {
            
            unset($_SESSION['user']);//on détruit l'user en session
            
            header("Location:?action=index");//et on renvoit vers l'accueil !
        }
        
    }