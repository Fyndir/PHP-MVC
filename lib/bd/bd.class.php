<?php

	class BD
	{

		//RAF créer un user sql pour la recherche/ajout en limitant ces droits

		//mettre le nom de votre base de donnée
		private $dbName = "test";
		//donnez le mot de passe de votre bd
		private $pass = "";
		//donnez le nom d'utilisateur de la bd (probablement "root") -- > PAS BIEN !!!!!!!!!
		private $user = "admin";


		// retourne une connexion PDO à la BDD
		private function getDB()
		{
			$db = null;
			try
			{
				$db = new PDO('mysql:host=localhost;dbname='.$this->dbName, $this->user, $this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch (Exception $e)
			{
					die('Erreur : ' . $e->getMessage());
			}
			return $db;
		}

		// retourne le resultat de la requete passer en parametre sous forme d'un tableau
		public function requete($sql,$class=null)
		{
				$resu = null;
				$db = $this->getDB();
				$sth = $db->query($sql);
				if (!empty($class))
				{
					$resu=	$sth->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$class);
				}
				else
				{
					$resu=	$sth->fetchAll(PDO::FETCH_ASSOC);
				}

				return $resu;
		}
	}






?>
