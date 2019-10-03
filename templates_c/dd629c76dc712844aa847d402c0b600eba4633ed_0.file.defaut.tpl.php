<?php
/* Smarty version 3.1.33, created on 2019-10-03 12:27:04
  from 'C:\Users\Sénid\Documents\GitHub\TLI\templates\defaut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d95e9182251f9_05708888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd629c76dc712844aa847d402c0b600eba4633ed' => 
    array (
      0 => 'C:\\Users\\Sénid\\Documents\\GitHub\\TLI\\templates\\defaut.tpl',
      1 => 1570105303,
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
function content_5d95e9182251f9_05708888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
<?php $_smarty_tpl->_subTemplateRender('file:errorMsg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
