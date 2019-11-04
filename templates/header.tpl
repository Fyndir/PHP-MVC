<!Doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <meta name="description" content="Projet">
        <link rel="stylesheet" href="/styles/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

    <body>

        <header>
            <h1>
                Projet Fil Rouge - Groupe B1
            </h1>
            <div id="loginForm">
            {if (empty($ConnectedUser))}
                    <form  action="/login" method="POST">
                      <span class="OneLine">
                        <label for="login">Login :</label>
                        <input type="text" name="login" id="login">
                      </span>
                      <span class="OneLine">
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" name="pwd" id="pwd">
                      </span>
                      <span class="OneLine">
                            <button type="submit" value="Valider">Valider</button>
                      </span>
                      <span class="OneLine">
                        Pas de compte? Inscrivez-vous en <a id="Inscrivez-vous" href = "/register"> cliquant ici </a>
                      </span>

                        <small id="errorMsg"></small>
                    </form>
              {else}
                <label id="lbhellouser">Bonjour {$ConnectedUser->prenom} {$ConnectedUser->nom}</label>

              {/if}
            </div>
            <menu>
                <nav>
                    <a href="/">Accueil</a>
                  {if (!empty($ConnectedUser))}
                    <a href="/ModifUser">Modification Information</a>
                    <a href="/SearchByKeywords">Recherche par mots clef</a>
                    <a href="/logout">Deconnexion</a>
                  {/if}              
                </nav>
            </menu>

        </header>
        <main class="content">
