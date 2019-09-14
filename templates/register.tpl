<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="description" content="Projet">
        <link rel="stylesheet" href="styles/style.css">
        <script type="text/javascript" src="js/script.js"></script>
    </head>

    <body >

        <header>
            <h1>
                Projet Fil Rouge - Groupe B1
            </h1>

            <menu>
                <nav>
                    <a href="?action=">Accueil</a>
                    <a href="?action=recherche">Recherche</a>
                </nav>
            </menu>

        </header>

	<h2> Inscription </h2>

	<form action="../lib/login/register.php" method="POST">
		<table>
		<tr>
	  	<td>
    		<label for="email">Mail <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input type="text" placeholder="Enter your email" name="email">
	 		</td>
		</tr>
	</br>
		<tr>
			<td>
					<label for="password"> Password <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input type="password" placeholder="Your desired password" name="password">
			</td>
		<tr/>
		<tr>
			<td>
					<label for="password_confirm"> Confirm your password <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input type="password" placeholder="Confirm your password" name="password_confirm">
			</td>
	  </tr>
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
	</table>

	</form>

        <footer>
            <p>Site réalisé par le groupe B1</p>
        </footer>

    </body>

</html>
