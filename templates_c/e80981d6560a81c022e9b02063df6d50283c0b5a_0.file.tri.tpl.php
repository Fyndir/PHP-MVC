<?php
/* Smarty version 3.1.33, created on 2019-10-24 20:31:06
  from 'C:\wamp64\www\TLI4IRC\templates\tri.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db20a0a224b70_13196097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80981d6560a81c022e9b02063df6d50283c0b5a' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\tri.tpl',
      1 => 1571945141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db20a0a224b70_13196097 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Liste des pathologies</h2>
<form>
  <label for="MeridienChoise"> Meridien </label>
  <select id="MeridienChoise">
    <option value="All"> All</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AllMeridien']->value, 'meridien');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['meridien']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['meridien']->value['code'];?>
"> <?php echo $_smarty_tpl->tpl_vars['meridien']->value['nom'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
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
 type="module" src="js/TriPathos.js"><?php echo '</script'; ?>
>
<?php }
}
