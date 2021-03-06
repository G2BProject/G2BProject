<?php 
	function inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$nom_membre,$prenom_membre,$sexe,$date_de_naissance,$adresse_membre,$departement,$image_membre){
		global $bdd;

	$cle_validation = sha1(microtime(TRUE)*100000);

	$req = $bdd->prepare('INSERT INTO membre(Role_ID, pseudo, adresse_email, mot_de_passe, nom_membre, prenom_membre, sexe, date_de_naissance, adresse_membre, departement, image_membre, cle_validation, date_inscription) VALUES(:Role_ID, :pseudo, :adresse_email, :mot_de_passe, :nom_membre, :prenom_membre, :sexe, :date_de_naissance, :adresse_membre, :departement, :image_membre, :cle_validation, NOW())');
	$req -> execute(array(
		'Role_ID' => $Role_ID,
		'pseudo' => $pseudo,
		'adresse_email' => $adresse_email,
		'mot_de_passe' => $mot_de_passe_hache,
		'nom_membre' => $nom_membre,
		'prenom_membre' => $prenom_membre,
		'sexe' => $sexe,
		'date_de_naissance' => $date_de_naissance,
		'adresse_membre' => $adresse_membre,
		'departement' => $departement,
		'image_membre' => $image_membre,
		'cle_validation' => $cle_validation,
		));

	}
	function verifPseudo($nom){
	global $bdd;
			$req = $bdd -> prepare('SELECT pseudo FROM membre WHERE pseudo = :pseudo');
			$req -> execute(array('pseudo' => $nom));
			$res = $req -> fetch();
			if($res){
				return true;
			}else{
				return false;
			}
 }

	function verifMail($mail){
			global $bdd;
			$req = $bdd -> prepare('SELECT adresse_email FROM membre WHERE adresse_email = :adresse_email');
			$req -> execute(array('adresse_email' => $mail));
			$res2 = $req -> fetch();
			return $res2;
	}
	function connexion($pseudo,$password){
		global $bdd;
	    $query=$bdd->prepare('SELECT mot_de_passe, pseudo, departement, Role_ID
	    FROM membre WHERE membre.pseudo = :pseudo');
        $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
        $query->execute();
	    $data=$query->fetch();
	    return $data;
	}

	function mail_validation($adresse_email, $pseudo, $cle_validation){

		$destinataire = $adresse_email ;
		$sujet = 'Activation de votre compte SaveUrShow' ;
		$message = 'Bienvenue sur SaveUrShow ! 
		Pour pouvoir profiter dès maintenant de toutes les fonctionnalités du site grâce à votre compte, vous devez l\'activer en cliquant sur le lien ci-dessous ou en le copiant/collant dans votre navigateur.

		http://localhost/G2BProject/mvc1/index.php?page=validation?log='.urlencode($pseudo).'&cle'.urlencode($cle_validation).'' ;

		$entete = "From : inscription@SaveUrShow.com" ;

		mail($destinataire, $sujet, $message, $entete);
	}

	function infoProfil($nom){
		global $bdd;
		$query=$bdd->prepare('SELECT ID, pseudo, nom_membre, prenom_membre, adresse_email, date_de_naissance, adresse_membre, sexe, bio_membre, date_inscription, role_ID, image_membre
	    FROM membre WHERE pseudo = :nom');
        $query->bindValue(':nom',$nom, PDO::PARAM_STR);
        $query->execute();
	    $data_artiste=$query->fetch();
	    return $data_artiste;
	}
 ?>