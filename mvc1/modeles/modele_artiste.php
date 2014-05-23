<?php 
	function ajoutArtiste($nom_artiste, $bio){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO artiste(nom_artiste, bio, date_de_creation ) VALUES(:nom_artiste, :bio, NOW())');
	$req -> execute(array(
		'nom_artiste' => $nom_artiste,
		'bio' => $bio,
		));
	}

	function nomArtiste($nom_artiste){
		global $bdd;
		$req = $bdd -> prepare('SELECT nom_artiste FROM artiste WHERE nom_artiste = :nom_artiste');
		$req -> execute(array('nom_artiste' => $nom_artiste));
		$res = $req->fetch();
		return $res;
	}
 ?>