<?php

include('vues/header.php');

include('vues/vue_contact.php');

include('vues/footer.php');

if (!empty($_POST['nom_prenom'])) {
	include('modeles/modele_administration.php');
	if(empty($_POST['adresse_mail']) OR empty($_POST['objet']) OR empty($_POST['message'])){
		echo '<script> alert("Vous devez remplir tout les champs");	</script>';
	}else{
		ajoutMessageAdmin($_POST['nom_prenom'],$_POST['adresse_mail'],$_POST['objet'],$_POST['message']);
		echo '<script> alert("Votre message a été envoyé aux administrateurs du site");	</script>';
	}


}

?>