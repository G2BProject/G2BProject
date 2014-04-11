<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$Role_ID = $_POST['Role_ID'];

if(preg_match("#\w#", $_POST['pseudo']))
{
	$pseudo = $_POST['pseudo'];
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
	}
	else
	{
		die('Les deux adresses mails renseignées doivent être identiques');
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
					die('Les deux mots de passe renseignés doivent être identiques');
				}
			}
			else
			{
				die('Votre mot de passe doit contenir au moins un chiffre.');
			}
		}
		else
		{
			die('Votre mot de passe doit contenir au moins une lettre majuscule.');
		}
	}
	else
	{
		die('Votre mot de passe doit contenir au moins une lettre minuscule.');
	}
}
else
{
	die('Votre mot de passe doit comporter au moins 8 caractères.');
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

header('Location: Squelette.php');

?>