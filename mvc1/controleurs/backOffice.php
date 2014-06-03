<?php 
if(isset($_SESSION['pseudo'])){
	include('modeles/modele_utilisateur.php');
	$nom=$_SESSION['pseudo'];
 
	$info = infoProfil($nom);
	if($info['role_ID']==4){
		include('vues/header.php');
		include('vues/vue_backOffice.php');
		include('vues/footer.php');
	}
}

 ?>