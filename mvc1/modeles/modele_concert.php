<?php 
	function ajoutConcert($nom_du_concert, $salle, $artiste, $date_du_concert, $heure_du_concert, $image_concert){
		global $bdd;

		$req1 = $bdd -> query("SELECT ID FROM salle WHERE nom_de_la_salle ='$salle'");
		$res1 = $req1->fetch();
		$salle_ID= (int)$res1['ID'];

		$req = $bdd->prepare('INSERT INTO concert(nom_du_concert, salle_ID, date_du_concert, heure_du_concert, image_concert, date_ajout_concert) VALUES(:nom_du_concert, :salle_ID, :date_du_concert, :heure_du_concert, :image_concert, NOW())');
	$req -> execute(array(
		'nom_du_concert' => $nom_du_concert,
		'date_du_concert' => $date_du_concert,
		'heure_concert' => $heure_du_concert,
		'salle_ID' => $salle_ID,
		'image_concert' => $image_concert,
		));

		$req2 = $bdd -> query("SELECT ID FROM concert WHERE nom_du_concert ='$nom_du_concert'");
		$res2 = $req2->fetch();
		$concert_ID= (int)$res2['ID'];

		$req3 = $bdd -> query("SELECT ID FROM artiste WHERE nom_artiste = '$artiste'");
		$res3 = $req3->fetch();
		$artiste_ID= (int)$res3['ID'];

		$req4 = $bdd->prepare('INSERT INTO representation(concert_ID, artiste_ID) VALUES(:concert_ID, :artiste_ID)');
	    $req4 -> execute(array(
		'concert_ID' => $concert_ID,
		'artiste_ID' => $artiste_ID,
		));
	}

	function infoConcert($nom){
		global $bdd;
		$query=$bdd->prepare('SELECT concert.nom_du_concert, concert.date_du_concert, concert.heure_du_concert, salle.nombre_de_place, salle.nom_de_la_salle FROM concert, salle WHERE nom_du_concert = :nom');
        $query->bindValue(':nom',$nom, PDO::PARAM_STR);
        $query->execute();
	    $data_artiste=$query->fetch();
	    return $data_artiste;
	}

	function listConcertDep($departement){
		global $bdd;
		$req = $bdd -> prepare('SELECT concert.nom_du_concert, concert.date_du_concert, concert.heure_du_concert, salle.nom_de_la_salle FROM concert, salle WHERE concert.salle_ID = salle.ID AND salle.departement = :departement');
		$req -> execute(array('departement' => $departement));
		return $req ;
	}

	function nomConcert($nom_du_concert){
		global $bdd;
		$req = $bdd -> prepare('SELECT nom_du_concert FROM concert WHERE nom_du_concert = :nom_du_concert');
		$req -> execute(array('nom_du_concert' => $nom_du_concert));
		$res = $req->fetch();
		return $res;
	}
 ?>