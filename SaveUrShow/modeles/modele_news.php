<?php 
function getActu(){
		global $bdd;
		$query=$bdd->prepare('SELECT texte, photo FROM actu');
        $query->execute();
	    $actu=$query->fetch();
	    return $actu;
}

function getIDTop(){
		global $bdd;
		$req = $bdd -> query("SELECT ID_artiste1,  ID_artiste2, ID_artiste3 FROM top");
		$IDTop=$req->fetch();
	    return $IDTop;
}


function getArtiste($ID){
		global $bdd;
		$query=$bdd->prepare('SELECT artiste.nom_artiste, artiste.image_artiste FROM artiste WHERE ID = :ID');
		$query->bindValue(':ID',$ID, PDO::PARAM_STR);
        $query->execute();
	    $top_artiste=$query->fetch();
	    return $top_artiste;
}

function getIDCoeur(){
		global $bdd;
		$req = $bdd -> query("SELECT ID_artiste1,  ID_artiste2 FROM coup_de_coeur");
		$IDCoeur=$req->fetch();
	    return $IDCoeur;
}

function getNewArtiste(){
		global $bdd;
		$query=$bdd->prepare('SELECT artiste.nom_artiste, artiste.image_artiste FROM artiste ORDER BY date_ajout_artiste DESC');
        $query->execute();
	    $new_artiste=$query->fetchAll();
	    return $new_artiste;
}
function getLastConcert(){
		global $bdd;
		$query=$bdd->prepare('SELECT nom_du_concert, image_concert FROM concert ORDER BY date_du_concert DESC');
        $query->execute();
	    $lastConcert=$query->fetchAll();
	    return $lastConcert;
}
?>