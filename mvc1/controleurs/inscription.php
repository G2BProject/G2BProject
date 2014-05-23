<?php 

if (empty($_POST['Role_ID'])) {
	
	include('vues/header.php');


	include('vues/vue_inscription.php');


	include('vues/footer.php');
	
}else{

	include('modeles/modele_utilisateur.php');

	$Role_ID = $_POST['Role_ID'];

	if(!isset($_POST['cgu']))
	{
		die('Vous devez accepter les condition generales d\'utilisation du site pour vous inscrire.');
	} 

	if(preg_match("#\w#", $_POST['pseudo']))
	{
		$pseudo = $_POST['pseudo'];
		$req = $bdd -> prepare('SELECT pseudo FROM membre WHERE pseudo = :pseudo');
		$req -> execute(array('pseudo' => $pseudo));
		$res = $req->fetch();
		if($res)
		{ 
			die('Le pseudo choisi est deja utilise.');
		} 
	}
	else
	{
		die('Vous devez choisir un nom d\'utilisateur');
	}

	$adresse_email2 = $_POST['emailConfirm'];

	if(preg_match("#^[a-zA-Z0-9_.]+@\w{2,}\.[a-z]{2,4}$#", $_POST['adresse_email']))
	{
		if(preg_match("#$adresse_email2#", $_POST['adresse_email']))
		{
			$adresse_email = $_POST['adresse_email'];
			$req = $bdd -> prepare('SELECT adresse_email FROM membre WHERE adresse_email = :adresse_email');
			$req -> execute(array('adresse_email' => $adresse_email));
			$res2 = $req -> fetch();
			if ($res2)
			{
				die('L\'adresse mail renseigne est deja utilise.');
			}	
		}
		else
		{
			die('Les deux adresses mails renseignees doivent etre identiques');
		}
	}
	else
	{
		die('Votre adresse mail n\'a pas un format valide.');
	}

	$mot_de_passe = $_POST['mot_de_passe'];

	if(preg_match("#[0-9]+#", $_POST['mot_de_passe']))
	{
		if(preg_match("#[A-Z]+#", $_POST['mot_de_passe']))
		{
			if(preg_match("#[a-z]+#", $_POST['mot_de_passe']))
			{
				if(preg_match("#\w{8,}+#", $_POST['mot_de_passe']))
				{
					if(preg_match("#$mot_de_passe#", $_POST['passwordConfirm']))
					{
						$mot_de_passe_hache = sha1($_POST['mot_de_passe']);	
					}
					else
					{
						die('Les deux mots de passe renseignes doivent etre identiques.');
					}
				}
				else
				{
					die('Votre mot de passe doit contenir au moins un chiffre.');
				}
			}
			else
			{
				die('Votre mot de passe doit contenir au moins une majuscule.');
			}
		}
		else
		{
			die('Votre mot de passe doit contenir au moins une minuscule.');
		}
	}
	else
	{
		die('Votre mot de passe doit comporter au moins 8 caracteres.');
	}


	$nom_membre = $_POST['nom_membre'];
	$prenom_membre = $_POST['prenom_membre'];
	$sexe = $_POST['sexe'];
	$an = $_POST['an'];
	$mois = $_POST['mois'];
	$jour = $_POST['jour'];
	$date_de_naissance = $an.'-'.$mois.'-'.$jour;
	$adresse = $_POST['adresse_membre'];

	inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$nom_membre,$prenom_membre,$sexe,$date_de_naissance,$adresse);

	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['mot_de_passe'] = $mot_de_passe;

		include('controleurs/accueil.php');
		echo '<script> alert("Vous etes correctement inscrit '.$pseudo.'!");	</script>';
}

 ?>