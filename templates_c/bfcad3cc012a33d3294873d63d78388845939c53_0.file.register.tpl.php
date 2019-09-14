<?php
/* Smarty version 3.1.33, created on 2019-09-14 09:50:08
  from 'C:\wamp64\www\TLI4IRC\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7cb7d09159d4_64201401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfcad3cc012a33d3294873d63d78388845939c53' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\register.tpl',
      1 => 1568454605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7cb7d09159d4_64201401 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="description" content="Projet">
        <link rel="stylesheet" href="styles/style.css">
        <?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
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
<?php }
}
