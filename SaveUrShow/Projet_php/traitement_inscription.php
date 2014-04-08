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
$pseudo = $_POST['pseudo'];
$adresse_email = $_POST['adresse_email'];
$mot_de_passe_hache = sha1($_POST['mot_de_passe']);
$name = $_POST['name'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$date_de_naissance = $_POST['an']."-".$_POST['mois']."-".$_POST['jour'];
$adresse = $_POST['adresse'];

var_dump($date_de_naissance);
die();

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