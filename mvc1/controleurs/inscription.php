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
		die('<div class="titre1"><p>Vous devez accepter les condition generales d\'utilisation du site pour vous inscrire.</p>
		<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
			');
	} 

	if(preg_match("#\w#", $_POST['pseudo']))
	{
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$req = $bdd -> prepare('SELECT pseudo FROM membre WHERE pseudo = :pseudo');
		$req -> execute(array('pseudo' => $pseudo));
		$res = $req->fetch();
		if($res)
		{ 
			die('<div class="titre1"><p>Le pseudo choisi est deja utilise.</p>
		<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
				');
		} 
	}
	else
	{
		die('<div class="titre1"><p>Vous devez choisir un nom d\'utilisateur.</p>
		<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
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
				die('<div class="titre1"><p>L\'adresse mail renseigne est deja utilise.</p>
		<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
					');
			}	
		}
		else
		{
			die('<div class="titre1"><p>Les deux adresses mails renseignees doivent etre identiques.</p>
		<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
				');
		}
	}
	else
	{
		die('<div class="titre1"><p>Votre adresse mail n\'a pas un format valide.</p>
		<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
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
						die('<div class="titre1"><p>Les deux mots de passe renseignes doivent etre identiques.</p>
							<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
							');
					}
				}
				else
				{
					die('<div class="titre1"><p>Votre mot de passe doit contenir au moins un chiffre.</p>
							<p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
						');
				}
			}
			else
			{
				die('<div class="titre1"><p>Votre mot de passe doit contenir au moins une majuscule.</p>
					 <p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
					');
			}
		}
		else
		{
			die('<div class="titre1"><p>Votre mot de passe doit contenir au moins une minuscule.</p>
					 <p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
				');
		}
	}
	else
	{
		die('<div class="titre1"><p> Votre mot de passe doit comporter au moins 8 caracteres.</p>
					 <p>Cliquez <a href="javascript:history.go(-1)">ici</a> pour revenir</p></div>
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
		if (!in_array($extension_upload,$extensions_valides)) $erreur = "Extension invalide.";

		if($_FILES['image_membre']['size'] > $max_size) $erreur = "Le fichier dépasse la taille limite." ;

		$image_sizes = getimagesize($_FILES['image_membre']['tmp_name']);
		if ($image_sizes[0] > $max_width OR $image_sizes[1] > $max_height) $erreur = "L'image a des dimensions trop importantes.";

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
		$image_membre = NULL ;
	}

	inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$nom_membre,$prenom_membre,$sexe,$date_de_naissance,$adresse_membre, $departement,$image_membre);

	$_SESSION['pseudo'] = $pseudo;
	$_SESSION['mot_de_passe'] = $mot_de_passe;
	$_SESSION['departement'] = $departement;

		include('vues/vue_accueil.php');
		include('vues/footer.php');
	echo '<script> alert("Vous etes correctement inscrit '.$pseudo.'!");	</script>';
}

 ?>