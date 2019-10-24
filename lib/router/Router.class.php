<?php

require_once 'Controller/SearchController.php';
require_once 'Controller/LoginController.php';
require_once 'Controller/RegisterController.php';
require_once 'Controller/ModifUserController.php';

// permet d'appeler les templates en fct du parametre action et d'appeler les controllers
class Router
{
	private $smarty = null;
	private $action = "";
	// permet de factoriser le code
	const mapTpl = array(
		"register" => "templates/register.tpl",
		"login" => "templates/defaut.tpl",
		"logout" => "templates/defaut.tpl",
		"AddUser" => "templates/register.tpl",
		"ModifUser" => "templates/ModifUser.tpl",
		"ModifUserBdd" => "templates/defaut.tpl"
	);

	function __construct($smarty,$action )
	{
		$this->smarty = $smarty;
		//if(isset(Router::mapTpl[$action]))
		//{
			$this->action = $action;
		//}
	}

/// Permet de renvoyer les templates en fonction du parametre action
	function processAction()
	{
		//var_dump($this->action);
		$ret = "templates/defaut.tpl";
		$this->smarty->assign("ErrorMessage","");
		if($this->action!="")
		{
			$ret = Router::mapTpl[$this->action];
		}

		if($this->action=="login")
		{
			$this->smarty=LoginControler::login($this->smarty);
		}

		if($this->action=='AddUser')
		{
			$this->smarty=RegisterControler::register($this->smarty);
		}
		if($this->action=="logout")
		{
				LoginControler::logout();
		}
		if($this->action=="ModifUserBdd")
		{
				ModifUserControler::modif($this->smarty);
		}
		if($this->action=="")
		{
			$this->smarty->assign("AllMeridien",	SearchControler::GetAllMeridien());
		}
		$this->smarty->assign("ConnectedUser",isset($_SESSION['user'])?$_SESSION['user']:null);
		//var_dump(	$this->smarty->tpl_vars["ConnectedUser"]);exit;
		return $ret;
	}

  /// Permet de renvoyer les resultats des recherches en json
	function processAPI()
	{
		$result="";
		if($this->action=="GetAllPatho")
		{
			$result=SearchControler::GetAllPatho();
		}
		if($this->action=="GetDetails")
		{
			$result=SearchControler::GetDetails();
		}
		return json_encode($result);
	}


}

?>
