<?php

if($_SESSION['pseudo']==$_GET['profil']){
	include('modeles/modele_utilisateur.php');
	$nom=$_GET['profil'];
 
	$info = infoProfil($nom);
	include('vues/header.php');

	include('vues/vue_profil.php');
	
	include('vues/footer.php');
}else{

}

?>