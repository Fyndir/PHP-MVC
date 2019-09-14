{include file='header.tpl'}


        <form id="loginForm" action="?action=login" method="POST">
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
{include file='footer.tpl'}
