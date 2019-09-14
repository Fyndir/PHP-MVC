<?php

  require('../lib/bd/bd.class.php');
	class RegisterControler
  {
    public static Function AddUser($user,$password)
    {

      if(!empty($user) && !empty($password))
      {

      	$sql = "INSERT INTO users (email,password) VALUES (:email,:password)";

      	$sql->bindParam(':email', $user,PDO::PARAM_STR, 255);

      	$secure_password = password_hash($password, PASSWORD_BCRYPT);
      	$sql->bindParam(':password', $secure_password,PDO::PARAM_STR, 255);
        $maBD = new BD();
        $resultat = $maBD->requete($sql);
      }
    }


  }

?>
