<?php 

if (empty($_POST['Role_ID'])) {
	
	include('vues/header.php');


	include('vues/vue_inscription.php');


	include('vues/footer.php');
	
}else{

	include('modeles/modele_utilisateur.php');
	include('vues/header.php');
	$Role_ID = $_POST['Role_ID'];

	if(!isset($_POST['cgu']))
	{
		die('<div class="titre1"><p>'.$_CONDITION.'.</p>
		<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
			');
	} 

	if(preg_match("#\w#", $_POST['pseudo']))
	{
		$pseudo = htmlspecialchars($_POST['pseudo']);
		if(verifPseudo($pseudo))
		{ 
			die('<div class="titre1"><p>'.$_PSEUDO_UTILISE.'.</p>
		<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
				');
		} 
	}
	else
	{
		die('<div class="titre1"><p>'.$_CHOIX.'.</p>
		<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
			');
	}

	$adresse_email2 = $_POST['emailConfirm'];

	if(preg_match("#^[a-zA-Z0-9_.]+@\w{2,}\.[a-z]{2,4}$#", $_POST['adresse_email']))
	{
		if(preg_match("#$adresse_email2#", $_POST['adresse_email']))
		{
			$adresse_email = htmlspecialchars($_POST['adresse_email']);
			$res2 = verifMail($adresse_email);
			if ($res2)
			{
				die('<div class="titre1"><p>'.$_MAIL_UTILISE.'.</p>
		<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
					');
			}	
		}
		else
		{
			die('<div class="titre1"><p>'.$_MEME_MAIL.'.</p>
		<p>'.$_APPUI.'<a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
				');
		}
	}
	else
	{
		die('<div class="titre1"><p>'.$_FORMAT_MAIL.'.</p>
		<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
			');
	}

	$mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);

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
						die('<div class="titre1"><p>'.$_MEME_MDP.'.</p>
							<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
							');
					}
				}
				else
				{
					die('<div class="titre1"><p>'.$_CHIFFRE.'.</p>
							<p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
						');
				}
			}
			else
			{
				die('<div class="titre1"><p>'.$_MAJ.'.</p>
					 <p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
					');
			}
		}
		else
		{
			die('<div class="titre1"><p>'.$_MIN.'.</p>
					 <p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
				');
		}
	}
	else
	{
		die('<div class="titre1"><p> '.$_CARACT.'.</p>
					 <p>'.$_APPUI.' <a href="javascript:history.go(-1)">'.$_ICI.'</a> '.$_REVENIR.'</p></div>
					');
	}

	if(isset($_POST['sexe'])){
		$sexe = htmlspecialchars($_POST['sexe']);
	}
	else{
		$sexe = NULL ;
	}

	$nom_membre = htmlspecialchars($_POST['nom_membre']);
	$prenom_membre = htmlspecialchars($_POST['prenom_membre']);
	$an = htmlspecialchars($_POST['an']);
	$mois = htmlspecialchars($_POST['mois']);
	$jour = htmlspecialchars($_POST['jour']);
	$date_de_naissance = $an.'-'.$mois.'-'.$jour;
	$adresse_membre = htmlspecialchars($_POST['adresse_membre']);
	$departement = htmlspecialchars($_POST['departement']);

	if($_FILES['image_membre']['error'] == 0){
		
		$max_size = 1000000 ;
		$max_height = 1000 ;
		$max_width = 1000 ;
		
		$extensions_valides = array('jpg','jpeg','png');
		$extension_upload = strtolower(substr(strrchr($_FILES['image_membre']['name'],'.'),1));
		if (!in_array($extension_upload,$extensions_valides)) $erreur = "'.$EXTENSION.'";

		if($_FILES['image_membre']['size'] > $max_size) $erreur = "'.$TAILLE.'." ;

		$image_sizes = getimagesize($_FILES['image_membre']['tmp_name']);
		if ($image_sizes[0] > $max_width OR $image_sizes[1] > $max_height) $erreur = "'.$DIM.'.";

		if(isset($erreur)){
			echo "$erreur";
		}
		else{

			if(!is_dir('ressources/avatars/membres/'.$pseudo)){
				mkdir('ressources/avatars/membres/'.$pseudo, true);
			}

			$image_membre = 'ressources/avatars/membres/'.$pseudo.'/'.$pseudo.'.'.$extension_upload;
			$resultat = move_uploaded_file($_FILES['image_membre']['tmp_name'],$image_membre);
		}
	}
	else{
		$image_membre = 'ressources/avatars/defaultPicture.jpg' ;
	}

	inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$nom_membre,$prenom_membre,$sexe,$date_de_naissance,$adresse_membre, $departement,$image_membre);
	echo '<script> alert("'.$CORRECT.' '.$pseudo.'!");	</script>';
	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['mot_de_passe'] = $mot_de_passe;
	$_SESSION['departement'] = $departement;
	header('Location: index.php');
	
}

 ?>