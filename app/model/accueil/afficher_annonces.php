<?php
function afficher_annonces() {
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT 	MA.MAN_REF,
													MA.MAN_VEN_LOC,
													MA.MAN_REG_LIB,
													MA.MAN_TITRE,
													MA.MAN_DESCR,
													MA.MAN_YOUTUBE,
													MA.MAN_TARIF,
													MA.MAN_CHARGES,
													MA.MAN_HONORAIRES,
													MA.MAN_TIME,
													MA.MAN_WEB,
													MA.UTI_ID,
													MA.MAN_CPT,
													MA.MAN_DATE_CREA,
													MA.MAN_NB_PIECES,
													MA.MAN_NB_CHAMBRES,
													MA.MAN_DATE,
													MA.MAN_ADR1,
													MA.MAN_ADR2,
													MA.MAN_CP,
													MA.MAN_VILLE,
													MA.MAN_REM,
													MA.MAN_NOTAIRE,
													MA.MAN_NOTAIRE_VILLE,
													MA.MAN_COMMENT,
													MA.MAN_VISITE,
													MA.MAN_CLES,
													MA.MAN_TRANSPORTS,
													MA.MAN_FONCIER,
													MA.MAN_HABITATION,
													MA.MAN_ECOLES,
													MA.MAN_DET_CHARGES,
													MA.MAN_COMMERCES,
													MA.MAN_EAU,
													MA.MAN_GAZ,
													MA.MAN_ELEC,
													MA.MAN_EGOUT,
													MA.MAN_FOSSE,
													MA.MAN_PRIX_CHAUF,
													MA.MAN_DPE,
													MA.MAN_GES,
													MA.MAN_TUILLES,
													MA.MAN_INONDABLE,
													MA.MAN_SURF_TER,
													MA.MAN_SURF_HAB,
													MA.MAN_TECH_COMMENT,
													MA.MAN_ANNEE,
													MI.MIT_ID,
													MI.MIT_LIB,
													NI.NIV_ID,
													NI.NIV_DESCR,
													OC.OCC_ID,
													OC.OCC_LIB,
													RE.REG_LIB,
													TY.TYP_ID,
													TY.TYP_LIB,
													CH.CHA_ID,
													CH.CHA_LIB,
													CO.CONS_ID,
													CO.CONS_LIB,
													AG.AGE_ID,
													AG.AGE_NOM,
													AG.AGE_RUE,
													AG.AGE_CP,
													AG.AGE_VILLE,
													AG.AGE_TEL,
													AG.AGE_FAX,
													AG.AGE_MAIL,
													AG.AGE_PHOTO,
													AG.AGE_PLAN,
													AG.AGE_DESCR,
													AG.AGE_CV,
													AG.AGE_YOUTUBE,
													COU.COU_ID,
													COU.COU_LIB
										   FROM mandats as MA,
										   		mitoyen as MI, 
										   		niveaux as NI,
										   		occupation as OC, 
										   		regions as RE,
										   		types as TY,
										   		chauffage as CH,
										   		construction as CO,
										   		agences as AG,
										   		couvertures as COU
										  WHERE AG.AGE_ID = MA.AGE_ID and
										  		MA.OCC_ID = OC.OCC_ID and
										  		MA.MIT_ID = MI.MIT_ID and
										  		MA.CHA_ID = CH.CHA_ID and
										  		MA.CONS_ID = CO.CONS_ID and
										  		MA.COU_ID = COU.COU_ID");
			$select -> execute();
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
		}

	catch ( Exception $e ) {
	return false;
	}
}

function afficher_annonces2() {
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT 	MA.MAN_REF,
													MA.MAN_VEN_LOC,
													MA.MAN_REG_LIB,
													MA.MAN_TITRE,
													MA.MAN_DESCR,
													MA.MAN_YOUTUBE,
													MA.MAN_TARIF,
													MA.MAN_CHARGES,
													MA.MAN_HONORAIRES,
													MA.MAN_TIME,
													MA.MAN_WEB,
													MA.UTI_ID,
													MA.MAN_CPT,
													MA.MAN_DATE_CREA,
													MA.MAN_NB_PIECES,
													MA.MAN_NB_CHAMBRES,
													MA.MAN_DATE,
													MA.MAN_ADR1,
													MA.MAN_ADR2,
													MA.MAN_CP,
													MA.MAN_VILLE,
													MA.MAN_REM,
													MA.MAN_NOTAIRE,
													MA.MAN_NOTAIRE_VILLE,
													MA.MAN_COMMENT,
													MA.MAN_VISITE,
													MA.MAN_CLES,
													MA.MAN_TRANSPORTS,
													MA.MAN_FONCIER,
													MA.MAN_HABITATION,
													MA.MAN_ECOLES,
													MA.MAN_DET_CHARGES,
													MA.MAN_COMMERCES,
													MA.MAN_EAU,
													MA.MAN_GAZ,
													MA.MAN_ELEC,
													MA.MAN_EGOUT,
													MA.MAN_FOSSE,
													MA.MAN_PRIX_CHAUF,
													MA.MAN_DPE,
													MA.MAN_GES,
													MA.MAN_TUILLES,
													MA.MAN_INONDABLE,
													MA.MAN_SURF_TER,
													MA.MAN_SURF_HAB,
													MA.MAN_TECH_COMMENT,
													MA.MAN_ANNEE,
													MI.MIT_ID,
													MI.MIT_LIB,
													OC.OCC_ID,
													OC.OCC_LIB,
													RE.REG_LIB,
													TY.TYP_ID,
													TY.TYP_LIB,
													CH.CHA_ID,
													CH.CHA_LIB,
													CO.CONS_ID,
													CO.CONS_LIB,
													AG.AGE_ID,
													AG.AGE_NOM,
													AG.AGE_RUE,
													AG.AGE_CP,
													AG.AGE_VILLE,
													AG.AGE_TEL,
													AG.AGE_FAX,
													AG.AGE_MAIL,
													AG.AGE_PHOTO,
													AG.AGE_PLAN,
													AG.AGE_DESCR,
													AG.AGE_CV,
													AG.AGE_YOUTUBE,
													COU.COU_ID,
													COU.COU_LIB
										   FROM mandats as MA,
										   		mitoyen as MI, 
										   		occupation as OC, 
										   		regions as RE,
										   		types as TY,
										   		chauffage as CH,
										   		construction as CO,
										   		agences as AG,
										   		couvertures as COU
										  WHERE AG.AGE_ID = MA.AGE_ID and
										  		MA.OCC_ID = OC.OCC_ID and
										  		MA.MIT_ID = MI.MIT_ID and
										  		MA.CHA_ID = CH.CHA_ID and
										  		MA.CONS_ID = CO.CONS_ID and
										  		MA.COU_ID = COU.COU_ID and
										  		MA.TYP_ID = TY.TYP_ID and
										  		MA.REG_ID = RE.REG_ID and
										  		AG.AGE_ID = '1'");
			$select -> execute();
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$resultat = $select -> fetchAll();
			return $resultat;
			//var_dump($resultat);
		}

	catch ( Exception $e ) {
	return false;
	}
}


function afficher_annonces3() {
	global $connexion;
	try {
			$select = $connexion->prepare("SELECT													
													MA.MAN_REF,
													MA.MAN_VEN_LOC,
													MA.MAN_REG_LIB,
													MA.MAN_TITRE,
													MA.MAN_DESCR,
													MA.MAN_YOUTUBE,
													MA.MAN_TARIF,
													MA.MAN_CHARGES,
													MA.MAN_HONORAIRES,
													MA.MAN_TIME,
													MA.MAN_WEB,
													MA.UTI_ID,
													MA.MAN_CPT,
													MA.MAN_DATE_CREA,
													MA.MAN_NB_PIECES,
													MA.MAN_NB_CHAMBRES,
													MA.MAN_DATE,
													MA.MAN_ADR1,
													MA.MAN_ADR2,
													MA.MAN_CP,
													MA.MAN_VILLE,
													MA.MAN_REM,
													MA.MAN_NOTAIRE,
													MA.MAN_NOTAIRE_VILLE,
													MA.MAN_COMMENT,
													MA.MAN_VISITE,
													MA.MAN_CLES,
													MA.MAN_TRANSPORTS,
													MA.MAN_FONCIER,
													MA.MAN_HABITATION,
													MA.MAN_ECOLES,
													MA.MAN_DET_CHARGES,
													MA.MAN_COMMERCES,
													MA.MAN_EAU,
													MA.MAN_GAZ,
													MA.MAN_ELEC,
													MA.MAN_EGOUT,
													MA.MAN_FOSSE,
													MA.MAN_PRIX_CHAUF,
													MA.MAN_DPE,
													MA.MAN_GES,
													MA.MAN_TUILLES,
													MA.MAN_INONDABLE,
													MA.MAN_SURF_TER,
													MA.MAN_SURF_HAB,
													MA.MAN_TECH_COMMENT,
													MA.MAN_ANNEE,
													MI.MIT_ID,
													MI.MIT_LIB,
													OC.OCC_ID,
													OC.OCC_LIB,
													RE.REG_LIB,
													TY.TYP_ID,
													TY.TYP_LIB,
													CH.CHA_ID,
													CH.CHA_LIB,
													CO.CONS_ID,
													CO.CONS_LIB,
													AG.AGE_ID,
													AG.AGE_NOM,
													AG.AGE_RUE,
													AG.AGE_CP,
													AG.AGE_VILLE,
													AG.AGE_TEL,
													AG.AGE_FAX,
													AG.AGE_MAIL,
													AG.AGE_PHOTO,
													AG.AGE_PLAN,
													AG.AGE_DESCR,
													AG.AGE_CV,
													AG.AGE_YOUTUBE,
													COU.COU_ID,
													COU.COU_LIB
										   FROM mandats as MA
										 LEFT JOIN agences as AG ON AG.AGE_ID = MA.AGE_ID
										 LEFT JOIN occupation as OC ON MA.OCC_ID = OC.OCC_ID
										 LEFT JOIN mitoyen as MI ON MA.MIT_ID = MI.MIT_ID
										 LEFT JOIN chauffage as CH ON MA.CHA_ID = CH.CHA_ID
										 LEFT JOIN construction as CO ON MA.CONS_ID = CO.CONS_ID
										 LEFT JOIN couvertures as COU ON MA.COU_ID = COU.COU_ID
										 LEFT JOIN types as TY ON MA.TYP_ID = TY.TYP_ID
										 LEFT JOIN regions as RE ON MA.REG_ID = RE.REG_ID
										 WHERE MA.AGE_ID = :id");
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