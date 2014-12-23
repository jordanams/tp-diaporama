<?php

function afficher_photo($id) {
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT	PH.PHO_ID,
													PH.PHO_SRC,
													PH.PHO_DESCR,
													PH.PHO_ORDRE,
													MA.MAN_ID
										   FROM photos as PH, mandats as MA
										   WHERE PH.MAN_ID = MA.MAN_ID and MA.MAN_ID = :id ");
			$select -> execute(array("id"=>$id));
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