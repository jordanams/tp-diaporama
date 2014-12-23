<?php

function liste_agence() {
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT
													AG.AGE_ID,
													AG.AGE_NOM
										   FROM agences as AG ");
			$select -> execute();
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			var_dump($resultat);
		}

	catch ( Exception $e ) {
	return false;
	}
}


?>