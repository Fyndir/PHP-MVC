<!DOCTYPE html>
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
