<?php 
	function SearchArtist($mot_cle, $type_recherche){
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
	
?>