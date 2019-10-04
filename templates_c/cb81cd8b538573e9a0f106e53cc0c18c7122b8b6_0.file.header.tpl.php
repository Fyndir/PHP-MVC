<?php
/* Smarty version 3.1.33, created on 2019-10-04 07:08:39
  from 'C:\Users\Sénid\Documents\GitHub\TLI\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96eff7cd8ac6_58872084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb81cd8b538573e9a0f106e53cc0c18c7122b8b6' => 
    array (
      0 => 'C:\\Users\\Sénid\\Documents\\GitHub\\TLI\\templates\\header.tpl',
      1 => 1570172917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96eff7cd8ac6_58872084 (Smarty_Internal_Template $_smarty_tpl) {
?><!Doctype html>
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
            <div id="loginForm">
            <?php if ((empty($_smarty_tpl->tpl_vars['ConnectedUser']->value))) {?>
                    <form  action="?action=login" method="POST">
                        <label for="login">Login :</label>
                        <input type="text" name="login" id="login">

                        <label for="pwd">Mot de passe :</label>
                        <input type="password" name="pwd" id="pwd">


                            <button type="submit" value="Valider">Valider</button>

                        <a id="Inscrivez-vous">Pas de compte? Inscrivez-vous en <a id="Inscrivez-vous" href = "?action=register"> cliquant ici </a></a>

                        <small id="errorMsg"></small>
                    </form>
              <?php } else { ?>
                <label id="lbhellouser">Bonjour <?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->nom;?>
</label>
                <a href="?action=logout">Deconnexion</a>
              <?php }?>
            </div>
            <menu>
                <nav>
                    <a href="?action">Accueil</a>
                <!--    <a href="?action=recherche">Recherche</a>-->
                </nav>
            </menu>

        </header>
<?php }
}
