<?php 
	function ajoutArtiste($nom_artiste, $bio_artiste, $ID_genre){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO artiste(nom_artiste, bio_artiste, ID_genre, date_ajout_artiste) VALUES(:nom_artiste, :bio_artiste, :ID_genre, NOW())');
	$req -> execute(array(
		'nom_artiste' => $nom_artiste,
		'bio_artiste' => $bio_artiste,
		'ID_genre' => $ID_genre,
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