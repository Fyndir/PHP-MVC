<?php
/* Smarty version 3.1.33, created on 2019-09-16 12:11:13
  from 'C:\wamp64\www\TLI4IRC\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7f7be1ad6302_93784204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f8f133baf81408d8bf96acc2ac981d1b64b1efd' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\defaut.tpl',
      1 => 1568633023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:errorMsg.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7f7be1ad6302_93784204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
<?php $_smarty_tpl->_subTemplateRender('file:errorMsg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
