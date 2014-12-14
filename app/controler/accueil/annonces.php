<?php
include_once('../app/model/accueil/afficher_annonces.php');


if(isset($_GET['id'])) {
		$afficher_annonces = afficher_annonces2($_GET['id']);
	}

include_once('../app/view/accueil/annonces.php'); 
?>