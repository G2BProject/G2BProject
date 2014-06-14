<?php

if($_SESSION['pseudo']==$_GET['profil']){
include('modeles/modele_gestionprofil.php');
include('vues/header.php');
include('vues/vue_gestionprofil.php');
include('vues/footer.php');
}


if (!empty($_POST['pseudo'])){
	if(modifierPseudoProfil($_POST['pseudo'],$_SESSION['pseudo'])){
		$_SESSION['pseudo']=$_POST['pseudo'];

		echo '<script> alert("Votre nom a bien été changé!");	</script>';
	}else{
		echo '<script> alert("Ce pseudo existe déjà!");	</script>';
	}
}


if (!empty($_POST['adresse_mail'])){
modifierMailProfil($_POST['adresse_mail'],$_SESSION['pseudo']);
echo '<script> alert("Votre Email a bien été changé!");	</script>';
}	


if (!empty($_POST['adresse'])){
modifierAdresseProfil($_POST['adresse'],$_SESSION['pseudo']);
echo '<script> alert("Votre adresse a bien été changé!");	</script>';
}


if (!empty($_POST['bio'])){
modifierBioProfil($_POST['bio'],$_SESSION['pseudo']);
echo '<script> alert("Votre biographie a bien été changé!");	</script>';
}
?>