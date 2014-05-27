<?php

if (empty($_POST['name'])) {
	
	
	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_ajoutSalle.php');


	include('vues/footer.php');
	
}else{
	include('modeles/modele_salle.php');
	if(empty($_POST['name']))
	{
		include('vues/header.php');
		die('Vous devez ajouter le nom de la salle.');
	}
	$name = $_POST['name'];
	$adresse = $_POST['adresse'];
	$departement = $_POST['departement'];
	$description = $_POST['description'];
	$numero = $_POST['numero'];
	$nb_places = $_POST['nb_places'];

	ajoutSalle($name,$adresse,$departement,$description,$numero,$nb_places);
		include('controleurs/accueil.php');
		echo '<script> alert("Votre salle est bien ajoutée!");	</script>';
}

 ?>