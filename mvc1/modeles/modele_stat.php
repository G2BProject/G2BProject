<?php 
	function nbrVisite(){
	global $bdd;
	$req = $bdd -> prepare("SELECT nombre_visite FROM statistique");
	$req -> execute();
	$res = $req->fetch();
	return $res[0];
	}
	function incraseVisite(){
	global $bdd;
	$req = $bdd -> prepare("UPDATE statistique SET nombre_visite = nombre_visite + 1");	
	$req -> execute();
	}
	function nbrInscrit(){
		global $bdd;
		$req = $bdd -> prepare("SELECT count(ID) FROM membre");
		$req -> execute();
	$res = $req->fetch();
	return $res['count(ID)'];
	}

 ?>