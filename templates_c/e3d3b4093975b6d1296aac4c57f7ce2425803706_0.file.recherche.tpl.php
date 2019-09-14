<?php
/* Smarty version 3.1.33, created on 2019-09-14 16:42:35
  from 'C:\wamp64\www\TLI4IRC\templates\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7d187b074a63_23180962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d3b4093975b6d1296aac4c57f7ce2425803706' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\recherche.tpl',
      1 => 1568479157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d7d187b074a63_23180962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Recherche</h2>

<form id="patho_search">
<label for="patho-choice">Choisir une pathologie :</label>
<input list="patho-list" id="patho-choice" name="patho_choice" />

<datalist id="patho-list">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ArrayPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
"/>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</datalist>

<!-- RAF : charge keyword + les autres dans des <datalist> -->
<button type="submit">Rechercher</button>

</form>

<ul id = 'searchResult'>

</ul>

<?php echo '<script'; ?>
 type="module" src="js/pathos.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
