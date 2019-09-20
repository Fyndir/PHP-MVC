<?php

session_start();

if( isset($_SESSION['user_id']) ){
    header("location: /");
}

require '..\bd\database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])){

	if($_POST['password']==$_POST['password_confirm'])
	{
	$sql = "INSERT INTO users (email,password) VALUES (:email,:password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email'],PDO::PARAM_STR, 255);

	$secure_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password', $secure_password,PDO::PARAM_STR, 255);

	if( $stmt->execute() ):
		$message = 'Successfully Created New User';
	else:
		$message = 'Error creating new user';
	endif;
	}
	else
	{
		$message = 'Password not identique';
	}

}
?>
