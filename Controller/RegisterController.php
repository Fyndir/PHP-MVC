<?php

  require_once('lib/bd/bd.class.php');
	class RegisterControler
  {
    public static Function AddUser($Mail,$password,$Nom,$Prenom)
    {
      // je ne sais pas si la verif est necessaire
      if(!empty($Mail) && !empty($password) && !empty($Nom) && !empty($Prenom))
      {
        $secure_password=password_hash($password, PASSWORD_BCRYPT);
      	$sql = "INSERT INTO users (email,password,nom,prenom) VALUES ('$Mail','$secure_password','$Nom','$Prenom')";
        $maBD = new BD();
        $resultat = $maBD->requete($sql);
      }
    }
  }

?>
