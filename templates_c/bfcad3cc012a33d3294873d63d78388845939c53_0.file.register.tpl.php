<?php
/* Smarty version 3.1.33, created on 2019-10-03 16:40:43
  from 'C:\wamp64\www\TLI4IRC\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96248b2a91e2_47572655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfcad3cc012a33d3294873d63d78388845939c53' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\register.tpl',
      1 => 1570120072,
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
function content_5d96248b2a91e2_47572655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<h2> Inscription </h2>

	<form action="?action=AddUser" method="POST">
		<table>
			<tr>
				<td>
						<label for="nom"> Nom <span class="formStar">*</span> :</label>
				</td>
				<td>
						<input  placeholder="Nom" name="Nom">
				</td>
		  </tr>
			<td>
					<label for="prenom"> Prenom <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input  placeholder="Prenom" name="Prenom">
			</td>
		</tr>
		<tr>
	  	<td>
    		<label for="email">Mail <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input type="email" placeholder="Enter your email" name="email">
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
	<?php $_smarty_tpl->_subTemplateRender('file:errorMsg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
