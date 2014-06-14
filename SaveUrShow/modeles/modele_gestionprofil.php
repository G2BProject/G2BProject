<?php

function modifierPseudoProfil($pseudo, $nom ){
	global $bdd;
	$req = $bdd -> prepare('SELECT pseudo FROM membre WHERE pseudo = :pseudo');
	$req -> execute(array('pseudo' => $pseudo));
	$res = $req -> fetch();
	if($res){
		return false;
	}else{
		$bdd -> exec("UPDATE membre SET pseudo= '$pseudo' WHERE pseudo='$nom'");
		return true;
	}

}

function modifierMailProfil($mail,$nom){
	global $bdd;	

	$bdd -> exec("UPDATE membre SET adresse_email= '$mail' WHERE pseudo='$nom'");

}

function modifierAdresseProfil($adresse, $nom ){
	global $bdd;	

	$bdd -> exec("UPDATE membre SET adresse_membre= '$adresse' WHERE pseudo='$nom'");

}

function modifierBioProfil($bio, $nom ){
	global $bdd;	

	$bdd -> exec("UPDATE membre SET bio_membre= '$bio' WHERE pseudo='$nom'");

}

?>