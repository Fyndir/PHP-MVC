<?php

  require_once('lib/bd/bd.class.php');
	class LoginControler
  {
    public static Function login($user,$password)
    {
      	$maBD = new BD();
      	$resultat = $maBD->requete("SELECT password FROM users where email='$user';");
        $bddPass=$resultat[0][0];
        if (password_verify($bddPass,$password))
        {
          $resultat=$maBD->requete("SELECT * FROM users where email='$user';");
          //var_dump($resultat);
        }
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
