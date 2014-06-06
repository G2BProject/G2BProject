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
		$nom_du_concert = htmlspecialchars($_POST['nom_du_concert']);
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
		$salle = htmlspecialchars($_POST['salle']);
	}
	else
	{
		die('Vous devez ajouter le nom de la salle.');
	}

	if(isset($_POST['artiste']))
	{	
		$artiste = htmlspecialchars($_POST['artiste']);
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



	$an = htmlspecialchars($_POST['an']);
	$mois = htmlspecialchars($_POST['mois']);
	$jour = htmlspecialchars($_POST['jour']);
	$date_du_concert = $an.'-'.$mois.'-'.$jour;
	$heure = htmlspecialchars($_POST['heure']);
	$minute = htmlspecialchars($_POST['minute']);
	$seconde=0;
	$heure_du_concert = $heure.':'.$minute.':'.$seconde;

	$test =ajoutConcert($nom_du_concert, $salle, $artiste, $date_du_concert, $heure);
	var_dump($test);
		//include('controleurs/accueil.php');
}

 ?>