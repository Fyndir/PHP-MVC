<?php
/* Smarty version 3.1.33, created on 2019-09-09 14:38:52
  from 'C:\wamp64\www\appli\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d7663fc770eb2_26129764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a3172242e5fbf232f1ccc69675cd97a15760c9a' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\login.tpl',
      1 => 1568039511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d7663fc770eb2_26129764 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

	<div class="header">
		<a href="/">Your App Name</a>
	</div>
	
	<h1>Login</h1>
	<span>or <a href="?action=register">register here</a></span>

	<form action="../lib/login/login.php" method="POST">

		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="password">
		<input type="submit">

	</form>

</body>
</html>
<?php }
}
