<?php 
include('modeles/modele_administration.php');
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
if (!empty($_POST['suppMembre'])) {
	if(verifMembre($_POST['suppMembre'])){
		suppMembre($_POST['suppMembre']);
		echo '<script> alert("Vous avez supprimé le compte de '.$_POST['suppMembre'].'!");	</script>';
	}else{
		echo '<script> alert("'.$_POST['suppMembre'].' n\'est pas un membbre existant!");	</script>';
	}
}

 ?>