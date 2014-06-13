<?php


	include('modeles/modele_recherche.php');

	$genre = $_GET['genre'];

	$ID=searchGenre($genre);
	$reqGenre=searchIDArtiste($ID['ID']);
	include('vues/header.php');
	include('vues/vue_resultatGenre.php');

	include('vues/footer.php');

 ?>