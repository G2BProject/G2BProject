<?php 
include('modeles/modele_administration.php');
if  (isset($_SESSION['pseudo'])){
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
		echo '<script> alert("'.$SUPP_COMPTE.' '.$_POST['suppMembre'].'!");	</script>';
	}else{
		echo '<script> alert("'.$_POST['suppMembre'].' '.$PAS_MEMBRE.'!");	</script>';
	}
}

if (!empty($_POST['suppArtiste'])) {
	if(verifArtiste($_POST['suppArtiste'])){
		suppArtiste($_POST['suppArtiste']);
		echo '<script> alert("Vous avez supprimé le compte de l\'artiste '.$_POST['suppArtiste'].'!");	</script>';
	}else{
		echo '<script> alert("'.$_POST['suppArtiste'].' n\'est pas un artiste existant!");	</script>';
	}
}

if (!empty($_POST['suppConcert'])) {
	if(verifConcert($_POST['suppConcert'])){
		suppConcert($_POST['suppConcert']);
		echo '<script> alert("'.$SUPP_ARTISTE.' '.$_POST['suppArtiste'].'!");	</script>';
	}else{
		echo '<script> alert("'.$_POST['suppConcert'].' '.$PAS_ARTISTE.'!");	</script>';
	}
}

if (!empty($_POST['num1'])) {
	if (!empty($_POST['num2'])) {
	if(!changeCoup($_POST['num1'],$_POST['num2'])){
		echo '<script> alert("Un de vos coups de coeur n\'existe pas");	</script>';
	}else{
		echo '<script> alert("Vous aves bien mis à jour vos coups de coeur");	</script>';
	}
	}else{
	echo '<script> alert("Vous devez remplir le coup de coeur 1 et 2");	</script>';	
	}
}elseif (!empty($_POST['num2'])) {
	echo '<script> alert("Vous devez remplir le coup de coeur 1 et 2");	</script>';	
}

if (!empty($_POST['top1']) AND !empty($_POST['top2']) AND !empty($_POST['top3'])){
	if(!changeTop($_POST['top1'],$_POST['top2'],$_POST['top3'])){
		echo '<script> alert("Un de vos artistes du top n\'existe pas");	</script>';
	}else{
		echo '<script> alert("Vous aves bien mis à jour votre top 3");	</script>';
	}
}elseif((!empty($_POST['top1']) and (empty($_POST['top2']) OR empty($_POST['top3']))) OR (!empty($_POST['top2']) and (empty($_POST['top1']) OR empty($_POST['top3']))) OR (!empty($_POST['top3']) and (empty($_POST['top2']) OR empty($_POST['top1'])))) {
	echo '<script> alert("Vous devez remplir tous vos top");	</script>';
}



if(!empty($_POST['actu'])){
	if($_FILES['photo_actu']['error'] == 0){

		$max_size = 1000000 ;
		$max_height = 1000 ;
		$max_width = 1000 ;

		$extensions_valides = array('png');
		$extension_upload = strtolower(substr(strrchr($_FILES['photo_actu']['name'],'.'),1));
		if (!in_array($extension_upload,$extensions_valides)) $erreur = "Extension invalide.";

		if($_FILES['photo_actu']['size'] > $max_size) $erreur = "Le fichier dépasse la taille limite." ;

		$image_sizes = getimagesize($_FILES['photo_actu']['tmp_name']);
		if ($image_sizes[0] > $max_width OR $image_sizes[1] > $max_height) $erreur = "L'image a des dimensions trop importantes.";

		if(isset($erreur)){
			echo "$erreur";
		}
		else{



			if(!is_dir('ressources/image/actu')){
				mkdir('ressources/image/actu', true);
			}
			//chmod('ressources/image/actu/actu.png',0755); //Change the file permissions if allowed
     		unlink('ressources/image/actu/actu.png');
			$photo_actu = 'ressources/image/actu/actu.png';
			move_uploaded_file($_FILES['photo_actu']['tmp_name'],$photo_actu);
		}
	}
	else{
		$photo_actu = NULL ;
	}	
	updateActu($_POST['actu']);
	echo '<script> alert("Vous avez mis a jour l\'actu de la page d\'accueil");	</script>';
}
 ?>