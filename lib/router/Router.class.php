<?php

require_once 'Controller/SearchController.php';
require_once 'Controller/LoginController.php';
class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"register" => "templates/register.tpl",
		"recherche" => "templates/recherche.tpl"
	);

	function __construct($smarty,$action ){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}

/// Permet de renvoyer les templates en fonction du parametre action
	function processAction(){
		$ret = "templates/defaut.tpl";
		$this->smarty->assign("ErrorMessage","");
		if($this->action!="")
		{
			$ret = Router::mapTpl[$this->action];
		}
		if($this->action="login")
		{
			if(!empty($_POST['login']) && !empty($_POST['pwd']))
			{
				$user=$_POST['login'];
				$password=$_POST['pwd'];
				$result=LoginControler::login($user,$password);
			  if (empty($result))
				{
					$this->smarty->assign("ErrorMessage","L'utilisateur n'existe pas");
				}
				else
				{
					$_session['user'] = $result;
				}
			}
		}
		if($this->action="AddUser")
		{
			if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'];))
			{
				$user=$_POST['email'];
				$password=$_POST['password'];
				$password_confirm=$_POST['password_confirm'];
				if(($password=$password_confirm))
					{
						//pas besoin de template parce qu'on va sur le default
						RegisterControler::AddUser($user,$password);
					}
					else
					{
						$this->smarty->assign("ErrorMessage","Les deux mot de passe ne sont identiques");
						$ret = "templates/register.tpl";
					}
				else
				{
						$this->smarty->assign("ErrorMessage","Les parametres sont mal renseigner");
						$ret = "templates/register.tpl";
				}
		}

		}
		if($this->action="recherche")
			{
				$this->smarty->assign("ArrayPatho",SearchControler::GetAllPatho());
				// RAF : charge keyword + les autres dans des var
			}
		return $ret;
	}

  /// Permet de renvoyer les resultats des recherches en json
	function processAPI(){
		if($this->action="recherche")
		{
			return SearchControler::SearchPatho($_GET['search']);
		}

	}


}

?>
