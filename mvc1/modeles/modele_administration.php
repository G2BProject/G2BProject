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
  function suppConcert($nom_concert){
	global $bdd;
	$req2 = $bdd -> query("SELECT ID FROM concert WHERE nom_du_concert ='$nom_concert'");	
	$res2 = $req2->fetch();
	$concert_ID= (int)$res2['ID'];

	$bdd->exec("DELETE FROM representation WHERE concert_ID ='$concert_ID'");
	$bdd->exec("DELETE FROM concert WHERE nom_du_concert ='$nom_concert'");
}
function verifConcert($nom_concert){
	global $bdd;

	$req = $bdd -> prepare('SELECT nom_du_concert FROM concert WHERE nom_du_concert = :nom_concert');
	$req -> execute(array('nom_concert' => $nom_concert));
	$res = $req -> fetch();
	if($res){
	return true;
	}else{
	return false;
	}
 }

 ?>
