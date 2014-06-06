<?php
	function ajoutSalle($nom_salle,$adresse_salle,$departement,$description_salle,$image_salle,$capacite,$telephone){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO salle(nom_salle, adresse_salle, departement, description_salle, image_salle, capacite, telephone) VALUES(:nom_salle, :adresse_salle, :departement, :description_salle, :image_salle, :capacite, :telephone)');
	$req -> execute(array(
		'nom_salle' => $nom_salle,
		'adresse_salle' => $adresse_salle,
		'departement' => $departement,
		'description_salle' => $description_salle,
		'capacite' => $capacite,
		'image_salle' => $image_salle,
		'telephone' => $telephone
		));

	}

	function listSalles(){
		global $bdd;
		$req = $bdd -> query('SELECT nom_de_la_salle, adresse_salle, description_salle, image_salle, nombre_de_place, numero_de_telephone FROM salle');
		return $req;
	}

	function listSallesDep($departement){
		global $bdd;
		$req = $bdd -> query("SELECT nom_de_la_salle, adresse_salle, description_salle, image_salle, nombre_de_place, numero_de_telephone FROM salle WHERE departement = '$departement'");
		return $req;
	}
?>