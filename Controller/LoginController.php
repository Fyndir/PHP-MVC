<?php
  require_once('Services/UserService.php');
	class LoginControler
  {
    /// Deconnecte l'user et detruit la session
		public static Function logout()
		{
			session_unset();
			session_destroy();
			header("Location: /");
		}

    /// permet d'interoger le service pour log l'utilisateur à l'aide des infos pris dans la view
    public static Function login($smarty)
    {
      if(isset($_POST['login']) && isset($_POST['pwd']))
      {
        if(!empty($_POST['login']) && !empty($_POST['pwd']))
        {

          $user=$_POST['login'];
          $password=$_POST['pwd'];
          $result=UserService::log_user($user,$password);
          if (empty($result))
            {
              $smarty->assign("ErrorMessage","L'utilisateur n'existe pas ou les parametres sont incorrectes");
              header("Location: /");
            }
          else
            {
              $_SESSION['user'] = $result;
              header("Location: /");          
            }
          }
          else
          {
            $smarty->assign("ErrorMessage","Les parametres ne sont pas saisies");
          }
      }
    }
  }

?>
