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
		$nom_artiste = htmlspecialchars($_POST['nom_artiste']);
		$res = nomArtiste($nom_artiste);
		if($res)
		{ 
			die(''.$_NOM_UTILISE.'.');
		}
	}
	else
	{

		die(''.$_CHOIX.'');
	}

	$bio_artiste = htmlspecialchars($_POST['bio_artiste']);
	$ID_genre = htmlspecialchars($_POST['genre']);

	if($_FILES['image_artiste']['error'] == 0){

		$max_size = 1000000 ;
		$max_height = 1000 ;
		$max_width = 1000 ;

		$extensions_valides = array('jpg','jpeg','png');
		$extension_upload = strtolower(substr(strrchr($_FILES['image_artiste']['name'],'.'),1));
		if (!in_array($extension_upload,$extensions_valides)) $erreur = "'.$_EXTENSION.'.";

		if($_FILES['image_artiste']['size'] > $max_size) $erreur = "'.$_TAILLE.'." ;

		$image_sizes = getimagesize($_FILES['image_artiste']['tmp_name']);
		if ($image_sizes[0] > $max_width OR $image_sizes[1] > $max_height) $erreur = "'.$_DIM.'.";

		if(isset($erreur)){
			echo "$erreur";
		}
		else{

			$user_pseudo = $_SESSION['pseudo'];

			if(!is_dir('ressources/avatars/artistes/'.$user_pseudo)){
				mkdir('ressources/avatars/artistes/'.$user_pseudo, true);
			}

			// $user_id = sha1($_SESSION['pseudo']); //

			$image_artiste = 'ressources/avatars/artistes/'.$user_pseudo.'/'.$nom_artiste.'.'.$extension_upload;
			move_uploaded_file($_FILES['image_artiste']['tmp_name'],$image_artiste);
		}
	}
	else{
		$image_artiste = 'ressources/avatars/defaultPicture.jpg' ;
	}

	ajoutArtiste($nom_artiste, $image_artiste, $bio_artiste, $ID_genre);
			include('controleurs/accueil.php');
}

?>