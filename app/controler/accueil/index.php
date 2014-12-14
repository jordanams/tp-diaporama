<?php
include_once('../app/model/accueil/agence.php');
$_SESSION['annonce'] = 0;
$agence = liste_agence();

include_once('../app/view/accueil/index.php'); 
?>