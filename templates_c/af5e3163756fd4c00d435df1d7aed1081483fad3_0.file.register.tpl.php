<?php
/* Smarty version 3.1.33, created on 2019-09-09 14:29:45
  from 'C:\wamp64\www\appli\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7661d9899e22_16862990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5e3163756fd4c00d435df1d7aed1081483fad3' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\register.tpl',
      1 => 1568039369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7661d9899e22_16862990 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="header">
		<a href="/">Your App Name</a>
	</div>

	<h1>Register</h1>
	<span>or <a href="?action=login">login here</a></span>

	<form action="../lib/login/register.php" method="POST">

		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="Your desired password" name="password">
		<input type="password" placeholder="Confirm your password" name="password_confirm">
		<input type="submit">

	</form>

</body>
</html>
<?php }
}
