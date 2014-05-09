<?php 
	function ajoutConcert($nom_du_concert,$date_du_concert,$heure,$salle_ID){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO concert(nom_du_concert, date_du_concert, heure, salle_ID, date_ajout_concert) VALUES(:nom_du_concert, :date_du_concert, :heure, :salle_ID, NOW())');
	$req -> execute(array(
		'nom_du_concert' => $nom_du_concert,
		'date_du_concert' => $date_du_concert,
		'heure' => $heure,
		'salle_ID' => $salle_ID,
		));
	}
 ?>