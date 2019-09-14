<!Doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <meta name="description" content="Projet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

    <body>

        <header>
            <h1>
                Projet Fil Rouge - Groupe B1
            </h1>
            <menu>
                <nav>
                    <a href="?action">Accueil</a>
                    <a href="?action=Recherche">Recherche</a>
                </nav>
            </menu>

        </header>

        <h2>Accueil</h2>
        <h3>Se connecter</h3>


        <form id="loginForm" action="../lib/login/login.php" method="POST">
            <label for="login">Login :</label><br/>
            <input type="text" name="login" id="login"><br/><br/>

            <label for="pwd">Mot de passe :</label><br/>
            <input type="password" name="pwd" id="pwd"><br/><br/>

            <div id="buttonForm">
                <button type="submit" value="Valider">Valider</button>
            </div>
            <a id="Inscrivez-vous">Pas de compte? Inscrivez-vous en <a id="Inscrivez-vous" href = "?action=register"> cliquant ici </a></a>

            <small id="errorMsg"></small>
        </form>

        <footer>
            <p>Site réalisé par le groupe B1 </p>
        </footer>

    </body>

</html>
