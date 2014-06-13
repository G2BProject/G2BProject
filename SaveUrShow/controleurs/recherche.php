<?php

if (empty($_POST['mot_cle'])) {

	include('modeles/modele_news.php');

	$actu= getActu();

	$IDTop= getIDTop();
	$artiste1= getArtiste($IDTop['ID_artiste1']);
	$artiste2= getArtiste($IDTop['ID_artiste2']);
	$artiste3= getArtiste($IDTop['ID_artiste3']);

	$IDCoeur = getIDCoeur();
	$coeur1= getArtiste($IDCoeur['ID_artiste1']);
	$coeur2= getArtiste($IDCoeur['ID_artiste2']);

	$newArtiste = getNewArtiste();

	$lastConcert= getLastConcert();
	
	include('vues/header.php');

	include('vues/vue_accueil.php');

	include('vues/footer.php');
	
}else{

	include('modeles/modele_recherche.php');

	$mot_cle = $_POST['mot_cle'];
	$type_recherche = $_POST['type_recherche'];
	$reqRecherche = search($mot_cle,$type_recherche);
	
	include('vues/header.php');
	include('vues/vue_resultat.php');
	include('vues/footer.php');
		
}



 ?>