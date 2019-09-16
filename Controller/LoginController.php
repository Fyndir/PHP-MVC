<?php

  require_once('lib/bd/bd.class.php');
	class LoginControler
  {
    public static Function login($user,$password)
    {
        $password=_hash($password,PASSWORD_BCRYPT);
      	$maBD = new BD();
      	$resultat = $maBD->requete("SELECT id FROM users where email='$user' and password='$password';");
      	return $resultat;
    }

		public static Function logout()
		{
			session_start();

			session_unset();

			session_destroy();

			header("Location: /");
		}
  }

?>
