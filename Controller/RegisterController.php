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
      	$sql = "INSERT INTO users (email,password,nom,prenom,is_admin) VALUES ('$Mail','$secure_password','$Nom','$Prenom',0)";
        $maBD = new BD();
        $resultat = $maBD->requete($sql);
      }
    }

    public static Function register($smarty)
    {
      if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm']) && isset($_POST['Nom']) && isset($_POST['Prenom']))
      {
        if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) && !empty($_POST['Nom']) && !empty($_POST['Prenom']))
        {
          $Mail=$_POST['email'];
          $password=$_POST['password'];
          $password_confirm=$_POST['password_confirm'];
          $Nom= $_POST['Nom'];
          $Prenom = $_POST['Prenom'];
          if(($password=$password_confirm))
            {
              RegisterControler::AddUser($Mail,$password,$Nom,$Prenom);
              // pour eviter l'injection en masse
              header("Location: /");
            }
            else
            {
              $smarty->assign("ErrorMessage","Les deux mots de passe ne sont identiques");
            }
          }
          else
          {
              $smarty->assign("ErrorMessage","Les parametres sont mal renseignés");
          }
      }
      return $smarty;
    }
  }

?>
