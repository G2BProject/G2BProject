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

 ?>
