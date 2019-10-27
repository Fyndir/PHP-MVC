<?php
/* Smarty version 3.1.33, created on 2019-10-27 14:26:51
  from 'C:\wamp64\www\TLI4IRC\templates\SearchByKeyWord.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db5a92b29d0e2_75150650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18930bbe94bfd57e15c09243630d02aaeddb506' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\SearchByKeyWord.tpl',
      1 => 1572186405,
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
function content_5db5a92b29d0e2_75150650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((empty($_smarty_tpl->tpl_vars['ConnectedUser']->value))) {?>
  <h2> Necessite d'etre connecté </h2>
<?php } else { ?>
<h2>recherches des pathologies par mots clefs </h2>
<form id="SearchForm">
  <span class="OneLine">
    <label for="keywordschoise"> keywords </label>
    <input type="text" id="keywordschoise">
    <button type="submit" >recherche</button>
  </span>
</form>
<table>
  <thead>
    <tr>
      <th> Description </th>
      <th> Type </th>
      <th> Meridien </th>
      <th> Element </th>
      <th> Yin/Yang </th>
    </tr>
  </thead>

  <tbody  id = 'searchResult'>

  </tbody>

</table>

<?php echo '<script'; ?>
 type="module" src="js/SearchPatho.js"><?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->_subTemplateRender('file:errorMsg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
