<?php

  require_once('lib/bd/bd.class.php');
	class LoginControler
  {
    public static Function login($user,$password)
    {
      	$maBD = new BD();
      	$verifPassword = $maBD->requete("SELECT password FROM users where email='$user';");
        $bddPass=$verifPassword[0][0];
        $resultat=null;
        if (password_verify($password,$bddPass))
        {
          $resultat=$maBD->requete("SELECT * FROM users where email='$user';");
          //var_dump($resultat);
        }
      	return $resultat[0];
    }

		public static Function logout()
		{
      var_dump($_SESSION['USER']);
			session_start();

			session_unset();

			session_destroy();

			header("Location: /");
		}
  }

?>
