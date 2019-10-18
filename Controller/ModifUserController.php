<?php

  require_once('lib/bd/bd.class.php');
  require_once('Model/user.php');
	class ModifUserControler
  {
    public static Function modif($smarty)
    {
      if (!empty($_SESSION['user']))
      {
        if (isset($_POST['email']) && isset($_POST['Nom']) && isset($_POST['Prenom']))
        {
          if (!empty($_POST['email']) && !empty($_POST['Nom']) && !empty($_POST['Prenom']))
          {
            $Mail=$_POST['email'];
            $Nom= $_POST['Nom'];
            $Prenom = $_POST['Prenom'];
            $_SESSION['user']->nom=$Nom;
            $_SESSION['user']->prenom=$Prenom;
            $_SESSION['user']->email=$Mail;
            $_SESSION['user']->update_user();
          //  header("Location: /");
          }
        }
      }
      else
      {
        header("Location: /");
        //var_dump($_SESSION['user']);exit;
      }
      return $smarty;
    }
  }

?>
