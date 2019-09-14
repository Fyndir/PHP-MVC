<?php


session_start();
require 'lib/smarty-3.1.33/libs/Smarty.class.php';
require 'lib/router/Router.class.php';
require 'lib/checkers/checkers.php';

$smarty = new Smarty();
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;//mettre à true pour la production; attention aux droits d'écriture sur le serveur pour le répertoire de cache!
$smarty->cache_lifetime = 0;//120

$action = "";
$API = false;

if(isset($_GET["action"]) && check($_GET["action"],"chaineAlpha")==1)
{
	$action = $_GET['action'];
}

if(isset($_GET["API"]) && check($_GET["API"],"chaineAlpha")==1)
{
	$action = $_GET['API'];
	$API=true;
}

$router = new Router($smarty,$action);

if ($API)
{
	$result=$router->processAPI();
	echo json_encode($result);
}
else
{
	$tpl = $router->processAction();
	$smarty->display($tpl);
}

?>
