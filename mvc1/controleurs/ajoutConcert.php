<?php

if (empty($_POST['nom_du_concert'])) {
	
	include('modeles/modele_concert.php');
	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_ajoutConcert.php');


	include('vues/footer.php');
	
}else{

	if(isset($_POST['nom_du_concert']))
	{
		$nom_du_concert = $_POST['nom_du_concert'];
		$req = $bdd -> prepare('SELECT nom_du_concert FROM concert WHERE nom_du_concert = :nom_du_concert');
		$req -> execute(array('nom_du_concert' => $nom_du_concert));
		$res = $req->fetch();
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

	$req = $bdd->prepare('INSERT INTO concert(nom_du_concert, date_du_concert, heure, date_ajout_concert) VALUES(:nom_du_concert, :date_du_concert, :heure_du_concert, NOW())');
	$req -> execute(array(
		'nom_du_concert' => $nom_du_concert,
		'date_du_concert' => $date_du_concert,
		'heure_du_concert' => $heure_du_concert,
		));
		include('controleurs/accueil.php');
}

 ?>