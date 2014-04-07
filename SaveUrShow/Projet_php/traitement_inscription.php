<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO membre(pseudo, adresse_email, mot_de_passe, name, prenom, sexe, adresse) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req -> execute(array(
	$_POST['pseudo'],
	$_POST['adresse_email'],
	$_POST['mot_de_passe'],
	$_POST['name'],
	$_POST['prenom'],
	$_POST['sexe'],
	$_POST['adresse'],
	));

header('Location: Squelette.php');

?>