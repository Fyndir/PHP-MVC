<?php
/* Smarty version 3.1.33, created on 2019-10-24 20:40:53
  from 'C:\wamp64\www\TLI4IRC\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db20c556cec76_90758664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfcad3cc012a33d3294873d63d78388845939c53' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI4IRC\\templates\\register.tpl',
      1 => 1571421479,
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
function content_5db20c556cec76_90758664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<h2> Inscription </h2>

	<form action="/AddUser" method="POST">
		<table>
			<tr>
				<td>
						<label for="nom"> Nom <span class="formStar">*</span> :</label>
				</td>
				<td>
						<input required placeholder="Nom" name="Nom">
				</td>
		  </tr>
			<td>
					<label for="prenom"> Prenom <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input requiredrequired placeholder="Prenom" name="Prenom">
			</td>
		</tr>
		<tr>
	  	<td>
    		<label for="email">Mail <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input required type="email" placeholder="Enter your email" name="email">
	 		</td>
		</tr>
	</br>
		<tr>
			<td>
					<label for="password"> Password <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input type="password" required placeholder="Your desired password" name="password">
			</td>
		<tr/>
		<tr>
			<td>
					<label for="password_confirm"> Confirm your password <span class="formStar">*</span> :</label>
			</td>
			<td>
					<input type="password" required placeholder="Confirm your password" name="password_confirm">
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
