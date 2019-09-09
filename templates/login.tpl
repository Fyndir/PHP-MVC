<!DOCTYPE html>
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
