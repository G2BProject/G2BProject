<?php

if (empty($_POST['nom_du_concert'])) {
	
	
	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_ajoutConcert.php');


	include('vues/footer.php');
	
}else{
	include('modeles/modele_concert.php');
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


	$an = $_POST['an'];
	$mois = $_POST['mois'];
	$jour = $_POST['jour'];
	$date_du_concert = $an.'-'.$mois.'-'.$jour;
	$heure = $_POST['heure'];
	$minute = $_POST['minute'];
	$seconde=0;
	$heure_du_concert = $heure.':'.$minute.':'.$seconde;

	ajoutConcert($nom_du_concert,$date_du_concert,$heure);
		include('controleurs/accueil.php');
}

 ?>