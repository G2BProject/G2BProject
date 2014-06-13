<?php

function modifierProfil($adresse_email, $pseudo, $adresse ){
global $bdd;

$req = $bdd -> prepare('UPDATE adresse_email pseudo SET adresse_email = WHERE adresse_email = :adresse_email pseudo = :pseudo');
   $adresse_email = $_POST['adresse_email'];
   $pseudo = $_POST['pseudo'];
$req -> execute(array('' => $));
$res = $req -> fetch();

?>