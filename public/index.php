<?php

//******************************************************//
// --------------- PAGE POLYMORPHE ---------------------//
	include_once('../app/config/connect.php');

		// dispatching des modules
		if (isset($_GET['module']))
		{
			$module = $_GET['module'];
		}
		else
		{
			// module par défaut
			$module = "accueil";
		}

		// dispatching des actions
		if (isset($_GET['action']))
		{
			$action = $_GET['action'];
		}
		else
		{
			// action par défaut
			$action = "index";
		}

		// construction de l'url
		$url = "../app/controler/" . $module . "/" . $action . ".php";

		// dispatching vers les controlers/action ou bien redirection 404
		if (file_exists($url))
		{
			include_once($url);
		}
		else
		{
			include_once('../app/view/404.php');
		}
