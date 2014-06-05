<?php 
	function ajoutArtiste($nom_artiste, $image_artiste, $bio_artiste, $ID_genre){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO artiste(nom_artiste, image_artiste, bio_artiste, ID_genre, date_ajout_artiste) VALUES(:nom_artiste, :image_artiste, :bio_artiste, :ID_genre, NOW())');
	$req -> execute(array(
		'nom_artiste' => $nom_artiste,
		'image_artiste' => $image_artiste,
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

	function pageArtiste($nom_artiste){
		global $bdd;
		$query=$bdd->prepare('SELECT artiste.nom_artiste, artiste.date_ajout_artiste, artiste.image_artiste, artiste.bio_artiste, ID_genre
	    FROM artiste WHERE artiste.nom_artiste = :nom_artiste');
        $query->bindValue(':nom_artiste',$nom_artiste, PDO::PARAM_STR);
        $query->execute();
	    $data_artiste=$query->fetch();
	    return $data_artiste;
	}
 ?>