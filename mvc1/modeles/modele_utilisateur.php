<?php 
	function inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$nom_membre,$prenom_membre,$sexe,$date_de_naissance,$adresse_membre){
		global $bdd;

	$cle_validation = sha1(microtime(TRUE)*100000);

	$req = $bdd->prepare('INSERT INTO membre(Role_ID, pseudo, adresse_email, mot_de_passe, nom_membre, prenom, sexe, date_de_naissance, adresse_membre, cle_validation, date_inscription) VALUES(:Role_ID, :pseudo, :adresse_email, :mot_de_passe, :nom_membre, :prenom, :sexe, :date_de_naissance, :adresse_membre, :cle_validation, NOW())');
	$req -> execute(array(
		'Role_ID' => $Role_ID,
		'pseudo' => $pseudo,
		'adresse_email' => $adresse_email,
		'mot_de_passe' => $mot_de_passe_hache,
		'nom_membre' => $nom_membre,
		'prenom' => $prenom,
		'sexe' => $sexe,
		'date_de_naissance' => $date_de_naissance,
		'adresse_membre' => $adresse_membre,
		'cle_validation' => $cle_validation,
		));

	}

	function connexion($pseudo,$password){
		global $bdd;
	    $query=$bdd->prepare('SELECT membre.mot_de_passe, membre.pseudo
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
 ?>