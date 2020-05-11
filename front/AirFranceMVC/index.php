<?php
    require './app/Router.php';

    define("CTRL_PATH", "./controller/");
    define("MODEL_PATH", "./model/");    
    define("VIEW_PATH", "./view/");      

    session_start();

    if(!isset($_SESSION['key'])) {
        $_SESSION['key'] = bin2hex(random_bytes(24));
    }
    $csrf = hash_hmac('sha256', 'secret_key', $_SESSION['key']);
    Router::csrfProtection($csrf);
    $result = Router::handleRequest($_GET);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Air France</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <nav id="mainNav">
                <div id="navleft">
                    <a href="index.php"><button>AIRFRANCE</button></a>
                    <a href="https://www.skyteam.com/fr"><button>skyteam</button></a>
                </div>
                <div id="navright">
                    <?php
                    if(isset($_SESSION['user'])) {
                        ?>
                        <a href="?action=logout"><button>Déconnexion</button></a>
                        <?php
                    }
                    else {
                        ?>
                        <a href="?action=register"><button>Créer mon compte</button></a>
                        <a href="?action=login"><button>Mon compte</button></a>
                        <?php
                    }
                    ?>
                </div>
            </nav>
        </header>
        <section id="banner">
            <figure>
                <img src="./public/media/LufthansaBanner.png" alt="Air France banner">
                <figcaption>Maintenant avec plus de distanciation sociale! Vos jambes vont kiffer!</figcaption>
            </figure>
        </section>
        <main>
            <?php

                require VIEW_PATH.$result['view'];
                    
            ?>
        </main>
        <footer>
            <nav id="socials">

            </nav>
        </footer>
    </div>
</body>
</html>