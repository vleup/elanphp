<?php
    session_start();
    if(!empty($_POST)) {
        $f_email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $f_password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, [
            'options' => array('regexp'=>'/[A-Za-z0-9]{6,32}/')
        ]);
        if ($f_email && $f_password) {
            require_once('connect.php');
            try {
                $sql = "SELECT * FROM client c
                        WHERE c.email = '"$f_email"'";
                $stmt = $link->query($sql);
                $result = $stmt->fetch();
                if($result !== false) {
                    if(password_verify($f_password, $result['password'])) {
                        $_SESSION['user'] = $result;
                        header('Location: welcome.php');
                    }
                    else header('');
                }
            }
            catch(PDOException $e) {
                echo $e->getMessage();
                exit();
            }
        }
        else header('Location: login.php?error=1');
    }
    else header('Location: login.php?error=0');
?>