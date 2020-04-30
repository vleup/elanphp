<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Air France</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <nav id="mainNav">
                <div id="navleft">
                    <a href="index.php"><button>AIRFRANCE</button></a>
                    <a href="https://fr.wikipedia.org/wiki/Forces_a%C3%A9riennes_fran%C3%A7aises_libres"><button>skyteam</button></a>
                </div>
                <div id="navright">
                    <a href="register.php"><button>Créer mon compte</button></a>
                    <a href="login.php"><button>Mon compte</button></a>
                </div>
            </nav>
        </header>
        <main>
            <form action="security2.php" id="register" method="post">
                <?php
                    include_once('model.php');
                    if(!empty($_GET) && $_GET['error'] !== false) {
                        echo '<h4>'.$errors[$_GET['error']].'</h4>';
                    }
                ?>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username">
                <label for="email">Courriel</label>
                <input type="text" name="email">
                <label for="password1">Mot de passe</label>
                <input type="password" name="password1">
                <label for="password2">Confirmer mot de passe</label>
                <input type="password" name="password2">
                <input type="submit" id="submitButton">
            </form>
        </main>
    </div>
</body>
</html>