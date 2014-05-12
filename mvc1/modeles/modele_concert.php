<?php 
	function ajoutConcert($nom_du_concert,$date_du_concert,$heure){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO concert(nom_du_concert, date_du_concert, heure, date_ajout_concert) VALUES(:nom_du_concert, :date_du_concert, :heure, NOW())');
	$req -> execute(array(
		'nom_du_concert' => $nom_du_concert,
		'date_du_concert' => $date_du_concert,
		'heure' => $heure,
		//'salle_ID' => $salle_ID,
		));
	}

	function nomConcert($nom_du_concert){
		global $bdd;
		$req = $bdd -> prepare('SELECT nom_du_concert FROM concert WHERE nom_du_concert = :nom_du_concert');
		$req -> execute(array('nom_du_concert' => $nom_du_concert));
		$res = $req->fetch();
		return $res;
	}
 ?>