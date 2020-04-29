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
                    <a href="https://www.skyteam.com/fr"><button>skyteam</button></a>
                </div>
                <div id="navright">
                    <a href="register.php"><button>Créer mon compte</button></a>
                    <a href="login.php"><button>Mon compte</button></a>
                </div>
            </nav>
        </header>
        <main>
            <form action="" id="login" method="post">
                <label for="email">Courriel</label>
                <input type="text" name="email">
                <label for="password">Mot de passe</label>
                <input type="password" name="password">
                <input type="submit" name="submitButton">
            </form>
        </main>
    </div>
</body>
</html>