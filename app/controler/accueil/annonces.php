<?php
include_once('../app/model/accueil/afficher_annonces.php');
include_once('../app/model/accueil/afficher_photo.php');

	if(isset($_GET['agence'])) {
		$afficher_annonces = afficher_annonces3($_GET['agence']);
		$count = count($afficher_annonces);
		$count2 = $count -1;
		$_SESSION['count'] = $count2;
		//echo "Nombre d'annonces : ";
		//echo $count2;
		//echo "<br/>";
	}


	if ($_SESSION['annonce'] == $count2)
	{
		$_SESSION['annonce'] = 0;
	}
	else
	{
		$_SESSION['annonce']++;
	}
	
	//echo "Annonce ";
	//echo $_SESSION['annonce'];

$afficher_photo = afficher_photo($afficher_annonces[$_SESSION['annonce']]['MAN_ID']);

include_once('../app/view/accueil/annonces.php'); 
?>