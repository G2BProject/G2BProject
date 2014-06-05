<?php

if (empty($_POST['nom_du_concert'])) {
	
	
	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_ajoutConcert.php');


	include('vues/footer.php');
	
}else{
	include('modeles/modele_concert.php');
	include('modeles/modele_artiste.php');
	include('vues/header.php');
	if(isset($_POST['nom_du_concert']))
	{
		$nom_du_concert = $_POST['nom_du_concert'];
		$res = nomConcert($nom_du_concert);
		if($res)
		{ 
			die('Le nom choisi est deja utilise.');
		} 
	}
	else
	{
		die('Vous devez ajouter le nom du concert.');
	}

	if(isset($_POST['salle']))
	{
		$salle = $_POST['salle'];
	}
	else
	{
		die('Vous devez ajouter le nom de la salle.');
	}

	if(isset($_POST['artiste']))
	{	
		$artiste = $_POST['artiste'];
		$res2 = nomArtiste($artiste);
		if(!$res2)
		{ 
			die('Le nom de l\'artiste choisi n\'existe pas.');
		}
	}
	else
	{
		die('Vous devez ajouter le nom de l\'artiste.');
	}



	$an = $_POST['an'];
	$mois = $_POST['mois'];
	$jour = $_POST['jour'];
	$date_du_concert = $an.'-'.$mois.'-'.$jour;
	$heure = $_POST['heure'];
	$minute = $_POST['minute'];
	$seconde=0;
	$heure_du_concert = $heure.':'.$minute.':'.$seconde;

	$test =ajoutConcert($nom_du_concert, $salle, $artiste, $date_du_concert, $heure);
	var_dump($test);
		//include('controleurs/accueil.php');
}

 ?>