<?php

  require_once('Services/UserService.php');
	class RegisterControler
  {
    /// Permet d'ajouter un user dans la bdd a l'aide des données de la vue
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
          if(($password==$password_confirm))
            {
              UserService::AddUser($Mail,$password,$Nom,$Prenom);
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
    }
  }

?>
