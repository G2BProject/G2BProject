<?php

if (empty($_POST['mot_cle'])) {
	
	
	include('vues/header.php');

	include('vues/vue_accueil.php');

	include('vues/footer.php');
	
}else{

	include('modeles/modele_recherche.php');
	if(isset($_POST['mot_cle']))
	{
		$mot_cle = $_POST['mot_cle'];
		$type_recherche = $_POST['type_recherche'];
	}
	Search($mot_cle, $type_recherche);

	include('controleurs/resultat.php');
}

 ?>