<?php
/* Smarty version 3.1.33, created on 2019-10-18 07:43:20
  from 'C:\Users\Sénid\Documents\GitHub\TLI\templates\ModifUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da96d1801dfe3_13416246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7cd6400e62401a4f004b16aaf1425fa295ee01' => 
    array (
      0 => 'C:\\Users\\Sénid\\Documents\\GitHub\\TLI\\templates\\ModifUser.tpl',
      1 => 1571384596,
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
function content_5da96d1801dfe3_13416246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php if ((empty($_smarty_tpl->tpl_vars['ConnectedUser']->value))) {?>
    <h2> Necessite d'etre connecté </h2>
  <?php } else { ?>
  <form action="/ModifUserBdd" method="POST">
		<table>
			<tr>
				<td>
						<label for="nom"> Nom <span class="formStar">*</span> :</label>
				</td>
				<td>
						<input required placeholder="Nom" value="<?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->nom;?>
" name="Nom">
				</td>
		  </tr>
			<td>
					<label for="prenom"> Prenom <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input requiredrequired placeholder="Prenom" value="<?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->prenom;?>
" name="Prenom">
			</td>
		</tr>
		<tr>
	  	<td>
    		<label for="email">Mail <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input required type="email" placeholder="Enter your email" value="<?php echo $_smarty_tpl->tpl_vars['ConnectedUser']->value->email;?>
" name="email">
	 		</td>
		</tr>
	</br>	

		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
	</table>

  <?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:errorMsg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}