<?php
	function ajoutSalle($name,$adresse,$departement,$description,$numero,$nb_places){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO salle(nom_de_la_salle, adresse_salle, departement, description_salle, nombre_de_place, numero_de_telephone) VALUES(:nom_de_la_salle, :adresse, :departement, :description, :nombre_de_place, :numero_de_telephone)');
	$req -> execute(array(
		'nom_de_la_salle' => $name,
		'adresse' => $adresse,
		'departement' => $departement,
		'description' => $description,
		'nombre_de_place' => $nb_places,
		'numero_de_telephone' => $numero
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