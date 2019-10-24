<?php
/* Smarty version 3.1.33, created on 2019-10-18 17:59:19
  from 'C:\wamp64\www\TLI4IRC\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da9fd7776b991_39307307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf568cf8f8db9eb0ccf0b239e5305e219dc8fdb' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\header.tpl',
      1 => 1571421479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da9fd7776b991_39307307 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <a id="Inscrivez-vous">Pas de compte? Inscrivez-vous en <a id="Inscrivez-vous" href = "/register"> cliquant ici </a></a>
                      </span>

                        <small id="errorMsg"></small>
                    </form>
              <?php } else { ?>
                <label id="lbhellouser">Bonjour <?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->nom;?>
</label>

              <?php }?>
            </div>
            <menu>
                <nav>
                    <a href="/">Accueil</a>
                  <?php if ((!empty($_smarty_tpl->tpl_vars['ConnectedUser']->value))) {?>
                    <a href="/ModifUser">Modification Information</a>
                    <a href="/logout">Deconnexion</a>          
                  <?php }?>
                </nav>
            </menu>

        </header>
        <div class="content">
<?php }
}
