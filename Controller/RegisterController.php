<?php

  require_once('lib/bd/bd.class.php');
	class RegisterControler
  {
    public static Function AddUser($user,$password)
    {
      // je ne sais pas si la verif est necessaire
      if(!empty($user) && !empty($password))
      {
        $secure_password=password_hash($password, PASSWORD_BCRYPT);;
      	$sql = "INSERT INTO users (email,password) VALUES ('$user','$secure_password')";
        $maBD = new BD();
        $resultat = $maBD->requete($sql);
      }
    }
  }

?>
