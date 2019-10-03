<?php

  require_once('lib/bd/bd.class.php');
	class LoginControler
  {
    public static Function log_user($user,$password)
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
			session_start();
			session_unset();
			session_destroy();
			header("Location: /");
		}

    public static Function login($smarty)
    {
      if(isset($_POST['login']) && isset($_POST['pwd']))
      {
        if(!empty($_POST['login']) && !empty($_POST['pwd']))
        {
          $user=$_POST['login'];
          $password=$_POST['pwd'];
          $result=LoginControler::log_user($user,$password);
          if (empty($result))
            {
              $smarty->assign("ErrorMessage","L'utilisateur n'existe pas ou les parametres sont incorrectes");
              header("Location: /");
            }
          else
            {
              $_SESSION['user'] = $result;
              //var_dump(	$_SESSION['user'] );
            }
          }
          else
          {
            $smarty->assign("ErrorMessage","Les parametres ne sont pas saisies");
          }
      }
      return $smarty;
    }
  }

?>
