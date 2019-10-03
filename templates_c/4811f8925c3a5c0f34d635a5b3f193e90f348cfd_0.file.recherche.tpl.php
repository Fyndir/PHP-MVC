<?php
/* Smarty version 3.1.33, created on 2019-10-03 14:02:26
  from 'C:\Users\Sénid\Documents\GitHub\TLI\templates\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d95ff729151a2_42134425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4811f8925c3a5c0f34d635a5b3f193e90f348cfd' => 
    array (
      0 => 'C:\\Users\\Sénid\\Documents\\GitHub\\TLI\\templates\\recherche.tpl',
      1 => 1570111338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d95ff729151a2_42134425 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Recherche</h2>

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
<?php }
}
