<?php

  require('../lib/bd/bd.class.php');
	class LoginControler
  {
    public static Function login($user,$password)
    {
      	$maBD = new BD();
      	$resultat = $maBD->requete("SELECT id FROM user where mail= $login and password=$password;");
      	print_r($resultat);
    }


  }

?>
