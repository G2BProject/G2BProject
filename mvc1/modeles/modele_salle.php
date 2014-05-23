<?php
	function ajoutSalle($name,$adresse,$description,$numero,$nb_places){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO salle(nom_de_la_salle, adresse_salle, description_salle, nombre_de_place, numero_de_telephone) VALUES(:nom_de_la_salle, :adresse, :description, :nombre_de_place, :numero_de_telephone)');
	$req -> execute(array(
		'nom_de_la_salle' => $name,
		'adresse' => $adresse,
		'description' => $description,
		'nombre_de_place' => $nb_places,
		'numero_de_telephone' => $numero
		));

	}
?>