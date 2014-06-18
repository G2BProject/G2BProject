<?php 
	function search($mot_cle, $type_recherche){
		global $bdd;
		if($type_recherche == '1'){
			$req = $bdd -> query("SELECT nom_artiste FROM artiste WHERE nom_artiste like '%$mot_cle%'");
			return $req;
		}elseif($type_recherche == '2'){
			// $req = $bdd -> query("SELECT nom_du_concert FROM concert WHERE nom_du_concert like '%$mot_cle%'");
			// return $req;

			$req = $bdd -> prepare('SELECT concert.nom_du_concert, concert.date_du_concert, concert.heure_du_concert, concert.image_concert, salle.nom_de_la_salle, artiste.nom_artiste FROM concert, salle, artiste, representation WHERE concert.salle_ID = salle.ID AND (concert.nom_du_concert like :mot_cle) AND representation.concert_ID=concert.ID and representation.artiste_ID=artiste.ID');
			$req -> execute(array('mot_cle' => '%'.$mot_cle.'%'));
			return $req ;
		}else{
				// $req = $bdd -> query("SELECT nom_de_la_salle FROM salle WHERE nom_de_la_salle like '%$mot_cle%'");
				// return $req;

				$req = $bdd -> prepare('SELECT nom_de_la_salle, adresse_salle, nombre_de_place, image_salle, numero_de_telephone FROM salle WHERE salle.nom_de_la_salle like :mot_cle');
				$req -> execute(array('mot_cle' => '%'.$mot_cle.'%'));
				return $req ;
		}
    			
			}

	function searchGenre($genre){
		global $bdd;
			$req = $bdd -> query("SELECT ID FROM genre WHERE genre like '%$genre%'");
			 $data=$req->fetch();
			return $data;
	}

	function searchIDArtiste($ID){
		global $bdd;
			$req = $bdd -> query("SELECT nom_artiste FROM artiste WHERE ID_genre = '$ID'");
			 //var_dump($req);
			return $req;
	}
?>