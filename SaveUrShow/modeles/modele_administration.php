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

function changeCoup($num1,$num2){
	global $bdd;

	$req1 = $bdd -> query("SELECT ID FROM artiste WHERE nom_artiste ='$num1'");
	$res1 = $req1->fetch();
	$ID_num1= (int)$res1['ID'];

	$req2 = $bdd -> query("SELECT ID FROM artiste WHERE nom_artiste ='$num2'");
	$res2 = $req2->fetch();
	$ID_num2= (int)$res2['ID'];

	if($res1 AND $res2){
		$bdd->exec("UPDATE coup_de_coeur SET ID_artiste1= '$ID_num1' , ID_artiste2= '$ID_num2'");
		return true;
	}else{
		return false;
	}
}
function changeTop($top1,$top2,$top3){
	global $bdd;

	$req1 = $bdd -> query("SELECT ID FROM artiste WHERE nom_artiste ='$top1'");
	$res1 = $req1->fetch();
	$ID_top1= (int)$res1['ID'];

	$req2 = $bdd -> query("SELECT ID FROM artiste WHERE nom_artiste ='$top2'");
	$res2 = $req2->fetch();
	$ID_top2= (int)$res2['ID'];

	$req3 = $bdd -> query("SELECT ID FROM artiste WHERE nom_artiste ='$top3'");
	$res3 = $req3->fetch();
	$ID_top3= (int)$res3['ID'];

	if($res1 AND $res2 AND $res3){
		$bdd->exec("UPDATE top SET ID_artiste1= '$ID_top1' , ID_artiste2= '$ID_top2', ID_artiste3= '$ID_top3'");
		return true;
	}else{
		return false;
	}
}

function updateActu($actu){
	global $bdd;
	$bdd -> exec("UPDATE actu SET texte= '$actu'");
}


function ajoutMessageAdmin($nom,$mail,$objet,$message){
	global $bdd;
	$req = $bdd->prepare('INSERT INTO message_admin(nom,email,objet,message,date) VALUES(:nom,:mail,:objet,:message, NOW())');
	$req -> execute(array(
		'nom'=>$nom,
		'mail'=>$mail,
		'objet'=>$objet,
		'message'=>$message,
	));
}


function messageAdmin(){
	global $bdd;
	$req = $bdd -> query("SELECT * FROM message_admin ORDER BY date");

	return $req;
}

 ?>
