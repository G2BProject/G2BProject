<?php 
	function search($mot_cle, $type_recherche){
		global $bdd;
		if($type_recherche == '1'){
			$req = $bdd -> query("SELECT nom_artiste FROM artiste WHERE nom_artiste like '%$mot_cle%'");
			return $req;
		}elseif($type_recherche == '2'){
			$req = $bdd -> query("SELECT nom_du_concert FROM concert WHERE nom_du_concert like '%$mot_cle%'");
			return $req;
		}else{
			$req = $bdd -> query("SELECT nom_de_la_salle FROM salle WHERE nom_de_la_salle like '%$mot_cle%'");
			return $req;
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