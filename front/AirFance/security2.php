<?php
    session_start();

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
            if($f_password1 == $f_password2) {
                require_once('connect.php');
                try {
                    $sql = "SELECT * FROM client c
                            WHERE c.email = '$f_email'";
                    $stmt = $link->query($sql);
                    $result = $stmt->fetch();
                    if($result == false) {
                        $securepass = password_hash($f_password1, PASSWORD_ARGON2I);
                        try {
                            $sql = "INSERT INTO client (username, email, password)
                                    VALUES ('$f_username', '$f_email', '$securepass')";
                            $stmt = $link->query($sql);
                            header('Location: login.php?error=5');
                            
                        }
                        catch(PDOException $e) {
                            echo $e->getMessage();
                            exit();
                        }
                    }
                    else header('Location: register.php?error=4');
                }
                catch(PDOException $e) {
                    echo $e->getMessage();
                    exit();
                }

                
            }
            else header('Location: register.php?error=3');    
        }
        else header('Location: register.php?error=2');
    }
    else header('Location: register.php?error=0');

?>