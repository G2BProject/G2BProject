<?php

if (empty($_POST['nom_de_la_salle'])) {


	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_ajoutSalle.php');


	include('vues/footer.php');

}else{
	include('modeles/modele_salle.php');
	if(empty($_POST['nom_de_la_salle'])){
		include('vues/header.php');
		die('Vous devez ajouter le nom de la salle.');
	}
	if(empty($_POST['departement'])){
		include('vues/header.php');
		die('Vous devez specifier un numero de departement pour votre salle.');
	}

	$nom_de_la_salle_0 = htmlspecialchars($_POST['nom_de_la_salle']);
	$nom_de_la_salle = preg_replace('/\s/', '', $nom_de_la_salle_0);

	$adresse_salle = htmlspecialchars($_POST['adresse_salle']);
	$departement = htmlspecialchars($_POST['departement']);
	$description_salle = htmlspecialchars($_POST['description_salle']);
	$numero_de_telephone = htmlspecialchars($_POST['numero_de_telephone']);
	$nombre_de_place = htmlspecialchars($_POST['nombre_de_place']);

	if($_FILES['image_salle']['error'] == 0){

		$max_size = 1000000 ;
		$max_height = 1000 ;
		$max_width = 1000 ;

		$extensions_valides = array('jpg','jpeg','png');
		$extension_upload = strtolower(substr(strrchr($_FILES['image_salle']['name'],'.'),1));
		if (!in_array($extension_upload,$extensions_valides)) $erreur = "Extension invalide.";

		if($_FILES['image_salle']['size'] > $max_size) $erreur = "Le fichier dépasse la taille limite." ;

		$image_sizes = getimagesize($_FILES['image_salle']['tmp_name']);
		if ($image_sizes[0] > $max_width OR $image_sizes[1] > $max_height) $erreur = "L'image a des dimensions trop importantes.";

		if(isset($erreur)){
			echo "$erreur";
		}
		else{

			$user_pseudo = $_SESSION['pseudo'];

			if(!is_dir('ressources/avatars/salles/'.$user_pseudo)){
				mkdir('ressources/avatars/salles/'.$user_pseudo, true);
			}

			// $user_id = sha1($_SESSION['pseudo']); //

			$image_salle = 'ressources/avatars/salles/'.$user_pseudo.'/'.$nom_de_la_salle.'.'.$extension_upload;
			move_uploaded_file($_FILES['image_salle']['tmp_name'],$image_salle);
		}
	}
	else{
		$image_salle = NULL ;
	}

	ajoutSalle($nom_de_la_salle,$adresse_salle,$departement,$description_salle,$image_salle,$nombre_de_place,$numero_de_telephone);
		include('controleurs/accueil.php');
		echo '<script> alert("Votre salle est bien ajoutée!");	</script>';
}

 ?>