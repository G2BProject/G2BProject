<?php

if(empty($_POST['nom_artiste']))
{
	//on executera ici les fonction du modèle dont nous aurons besoin.

	include('vues/header.php');


	include('vues/vue_ajoutArtiste.php');


	include('vues/footer.php');

}
else
{
	include('modeles/modele_artiste.php');
	if(isset($_POST['nom_artiste']))
	{
		$nom_artiste = $_POST['nom_artiste'];
		$res = nomArtiste($nom_artiste);
		if($res)
		{ 
			die('Le nom choisi est deja utilise.');
		}
	}
	else
	{

		die('Vous devez choisir un nom d\'utilisateur');
	}

	$bio_artiste = $_POST['bio_artiste'];
	$ID_genre= $_POST['genre'];

	/*if($_FILES['image']['size'] > $maxSize) $erreur = "L'image est trop grande." ;

	$extensions_valides = array('jpg', 'png');

	$extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.'),1));
	if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";

	$image_sizes = getimagesize($_FILES['image']['tmp_name']);
	if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "L'image est trop grande.";*/

	
	ajoutArtiste($nom_artiste, $bio_artiste, $ID_genre);
			include('controleurs/accueil.php');
}

?>