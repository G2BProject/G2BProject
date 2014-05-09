<?php 

if (empty($_POST['Role_ID'])) {
	
	include('modeles/modele_utilisateur.php');
	//on executera ici les fonction du modèle dont nous aurons besoin.


	include('vues/header.php');


	include('vues/vue_inscription.php');


	include('vues/footer.php');
	
}else{

	$Role_ID = $_POST['Role_ID'];

	if(!isset($_POST['cgu']))
	{
		die('Vous devez accepter les condition generales d\'utilisation du site.');
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


	$name = $_POST['name'];
	$prenom = $_POST['prenom'];
	$sexe = $_POST['sexe'];
	$an = $_POST['an'];
	$mois = $_POST['mois'];
	$jour = $_POST['jour'];
	$date_de_naissance = $an.'-'.$mois.'-'.$jour;
	$adresse = $_POST['adresse'];

	$req = $bdd->prepare('INSERT INTO membre(Role_ID, pseudo, adresse_email, mot_de_passe, name, prenom, sexe, date_de_naissance, adresse, date_inscription) VALUES(:Role_ID, :pseudo, :adresse_email, :mot_de_passe, :name, :prenom, :sexe, :date_de_naissance, :adresse, NOW())');
	$req -> execute(array(
		'Role_ID' => $Role_ID,
		'pseudo' => $pseudo,
		'adresse_email' => $adresse_email,
		'mot_de_passe' => $mot_de_passe_hache,
		'name' => $name,
		'prenom' => $prenom,
		'sexe' => $sexe,
		'date_de_naissance' => $date_de_naissance,
		'adresse' => $adresse,
		));
		include('controleurs/accueil.php');
}

 ?>