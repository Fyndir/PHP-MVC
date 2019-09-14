<?php
/*
	Routeur de base
	Mettre à jour la map mapTpl pour l'ajout d'une nouvelle vue
	Vous pouvez également créer d'autres classes spécifiant chaque routage particulier
	ou plus simplement mais moins proprement commencer par gérer ici toutes les routes
*/
require 'Controller/SearchController.php';
class Router
{
	private $smarty = null;
	private $action = "";
	const mapTpl = array(
		"register" => "templates/register.tpl",
		"login" => "templates/loguser.tpl",
		"recherche" => "templates/recherche.tpl"
	);

	function __construct($smarty,$action ){
		$this->smarty = $smarty;
		if(isset(Router::mapTpl[$action])){
				$this->action = $action;
		}
	}

	function processAction(){
		$ret = "templates/defaut.tpl";
		if($this->action!="")
		{
			$ret = Router::mapTpl[$this->action];
		}
		if($this->action="login")
		{
			if(!empty($_POST['login']) && !empty($_POST['password']))
			{
				$user=$_POST['login'];
				$password=$_POST['password'];
			}
			// appeler le controller pour utiliser la methode de log qui retourne un seul user
			// affecter l'user au template loguser ou le mettre en varaible de session ????
		}
		if($this->action="recherche")
			{
				$this->smarty->assign("ArrayPatho",SearchControler::GetAllPatho());
				// RAF : charge keyword + les autres dans des var
			}
		return $ret;
	}

	function processAPI(){
		if($this->action="recherche")
		{
			return SearchControler::SearchPatho($_GET['search']);
		}

	}


}

?>
