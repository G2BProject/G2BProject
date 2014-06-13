<?php
	function ajoutSalle($nom_de_la_salle,$adresse_salle,$departement,$description_salle,$image_salle,$nombre_de_place,$numero_de_telephone){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO salle(nom_de_la_salle, adresse_salle, departement, description_salle, image_salle, nombre_de_place, numero_de_telephone) VALUES(:nom_de_la_salle, :adresse_salle, :departement, :description_salle, :image_salle, :nombre_de_place, :numero_de_telephone)');
	$req -> execute(array(
		'nom_de_la_salle' => $nom_de_la_salle,
		'adresse_salle' => $adresse_salle,
		'departement' => $departement,
		'description_salle' => $description_salle,
		'nombre_de_place' => $nombre_de_place,
		'image_salle' => $image_salle,
		'numero_de_telephone' => $numero_de_telephone
		));

	}

	function listSalles(){
		global $bdd;
		$req = $bdd -> query('SELECT nom_de_la_salle, adresse_salle, description_salle, image_salle, nombre_de_place, numero_de_telephone FROM salle');
		return $req;
	}

	/* function listSallesDep($departement){
		global $bdd;
		$req = $bdd -> query("SELECT nom_de_la_salle, adresse_salle, description_salle, image_salle, nombre_de_place, numero_de_telephone FROM salle WHERE departement = $departement");
		return $req;
	} */

	function listSallesDep($departement){
		global $bdd;
		$req = $bdd -> prepare('SELECT nom_de_la_salle, adresse_salle, nombre_de_place, image_salle, numero_de_telephone FROM salle WHERE salle.departement = :departement');
		$req -> execute(array('departement' => $departement));
		return $req ;
	}

?>