<?php 
function suppMembre($nom){
	global $bdd;
	$bdd->exec("DELETE FROM membre WHERE pseudo ='$nom'");
}
function verifMembre($nom){
	global $bdd;
			$req = $bdd -> prepare('SELECT pseudo FROM membre WHERE pseudo = :pseudo');
			$req -> execute(array('pseudo' => $nom));
			$res = $req -> fetch();
			if($res){
				return true;
			}else{
				return false;
			}
 }

 function suppArtiste($nom_artiste){
	global $bdd;
	$bdd->exec("DELETE FROM artiste WHERE nom_artiste ='$nom_artiste'");
}
function verifArtiste($nom_artiste){
	global $bdd;
			$req = $bdd -> prepare('SELECT nom_artiste FROM artiste WHERE nom_artiste = :nom_artiste');
			$req -> execute(array('nom_artiste' => $nom_artiste));
			$res = $req -> fetch();
			if($res){
				return true;
			}else{
				return false;
			}
 }

 ?>
