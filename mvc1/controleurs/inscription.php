<?php 

if (empty($_POST['Role_ID'])) {
	
	
	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_inscription.php');


	include('vues/footer.php');
	
}else{
	include('modeles/modele_utilisateur.php');
	include('vues/header.php');
	$Role_ID = $_POST['Role_ID'];

	if(!isset($_POST['cgu']))
	{	
		die('<div class="titre1">Vous devez accepter les condition generales d\'utilisation du site. </br> <a href="?page=inscription">Retour</a></div>');

	} 

	if(preg_match("#\w#", $_POST['pseudo']))
	{
		$pseudo = $_POST['pseudo'];
		$req = $bdd -> prepare('SELECT pseudo FROM membre WHERE pseudo = :pseudo');
		$req -> execute(array('pseudo' => $pseudo));
		$res = $req->fetch();
		if($res)
		{ 
			die('<div class="titre1">Le pseudo choisi est deja utilise. </br> <a href="?page=inscription">Retour</a></div>');
		} 
	}
	else
	{
		die('<div class="titre1">Vous devez choisir un nom d\'utilisateur. </br> <a href="?page=inscription">Retour</a></div>');
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
				die('<div class="titre1">L\'adresse mail renseigne est deja utilise. </br> <a href="?page=inscription">Retour</a></div>');
			}	
		}
		else
		{
			die('<div class="titre1">Les deux adresses mails renseignees doivent etre identiques. </br> <a href="?page=inscription">Retour</a></div>');
		}
	}
	else
	{
		die('<div class="titre1">Votre adresse mail n\'a pas un format valide. </br> <a href="?page=inscription">Retour</a></div>');
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
						die('<div class="titre1">Les deux mots de passe renseignes doivent etre identiques. </br> <a href="?page=inscription">Retour</a></div>');
					}
				}
				else
				{
					die('<div class="titre1">Votre mot de passe doit contenir au moins un chiffre. </br> <a href="?page=inscription">Retour</a></div>');
				}
			}
			else
			{
				die('<div class="titre1">Votre mot de passe doit contenir au moins une majuscule. </br> <a href="?page=inscription">Retour</a></div>');
			}
		}
		else
		{
			die('<div class="titre1">Votre mot de passe doit contenir au moins une minuscule. </br> <a href="?page=inscription">Retour</a></div>');
		}
	}
	else
	{
		die('<div class="titre1">Votre mot de passe doit comporter au moins 8 caracteres. </br> <a href="?page=inscription">Retour</a></div>');
	}


	$name = $_POST['name'];
	$prenom = $_POST['prenom'];
	$sexe = $_POST['sexe'];
	$an = $_POST['an'];
	$mois = $_POST['mois'];
	$jour = $_POST['jour'];
	$date_de_naissance = $an.'-'.$mois.'-'.$jour;
	$adresse = $_POST['adresse'];

	inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$name,$prenom,$sexe,$date_de_naissance,$adresse);
		include('vues/vue_accueil.php');
}	
	

 ?>