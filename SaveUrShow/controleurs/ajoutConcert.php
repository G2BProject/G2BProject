<?php

if (empty($_POST['nom_du_concert'])) {


	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_ajoutConcert.php');


	include('vues/footer.php');

}else{
	include('modeles/modele_concert.php');
	include('modeles/modele_artiste.php');
	if(isset($_POST['nom_du_concert']))
	{
		$nom_du_concert = htmlspecialchars($_POST['nom_du_concert']);
		$nom_du_concert_image = preg_replace('/\s/', '', $nom_du_concert)
		$res = nomConcert($nom_du_concert);
		if($res)
		{ 
			die(''.$_NOM_UTILISE.'.');
		} 
	}
	else
	{
		die(''.$_CHOIX_NOM_CONCERT.'.');
	}

	if(isset($_POST['salle']))
	{
		$salle = htmlspecialchars($_POST['salle']);
	}
	else
	{
		die(''.$_CHOIX_NOM_SALLE.'.');
	}

	if(isset($_POST['artiste']))
	{	
		$artiste = htmlspecialchars($_POST['artiste']);
		$res2 = nomArtiste($artiste);
		if(!$res2)
		{ 
			die(''.$PAS_NOM.'.');
		}
	}
	else
	{
		die(''.$CHOIX_NOM_ARTISTE.'.');
	}



	$an = htmlspecialchars($_POST['an']);
	$mois = htmlspecialchars($_POST['mois']);
	$jour = htmlspecialchars($_POST['jour']);
	$date_du_concert = $an.'-'.$mois.'-'.$jour;
	$heure = htmlspecialchars($_POST['heure']);
	$minute = htmlspecialchars($_POST['minute']);
	$seconde=0;
	$heure_du_concert = $heure.':'.$minute.':'.$seconde;

	if($_FILES['image_concert']['error'] == 0){

		$max_size = 1000000 ;
		$max_height = 1000 ;
		$max_width = 1000 ;

		$extensions_valides = array('jpg','jpeg','png');
		$extension_upload = strtolower(substr(strrchr($_FILES['image_concert']['name'],'.'),1));
		if (!in_array($extension_upload,$extensions_valides)) $erreur = "'.$_EXTENSION.'.";

		if($_FILES['image_concert']['size'] > $max_size) $erreur = "'.$_TAILLE.'." ;

		$image_sizes = getimagesize($_FILES['image_concert']['tmp_name']);
		if ($image_sizes[0] > $max_width OR $image_sizes[1] > $max_height) $erreur = "'.$_DIM.'.";

		if(isset($erreur)){
			echo "$erreur";
		}
		else{

			$user_pseudo = $_SESSION['pseudo'];

			if(!is_dir('ressources/avatars/concerts/'.$user_pseudo)){
				mkdir('ressources/avatars/concerts/'.$user_pseudo, true);
			}

			// $user_id = sha1($_SESSION['pseudo']); //

			$image_concert = 'ressources/avatars/concerts/'.$user_pseudo.'/'.$nom_du_concert_image.'.'.$extension_upload;
			move_uploaded_file($_FILES['image_concert']['tmp_name'],$image_concert);
		}
	}
	else{
		$image_concert = 'ressources/avatars/defaultPicture.jpg' ;
	}

	var_dump(ajoutConcert($nom_du_concert, $salle, $artiste, $date_du_concert, $heure_du_concert, $image_concert));
		include('controleurs/accueil.php');
	echo '<script> alert("'.$CORRECT_CONCERT.' !");	</script>';
}

 ?>