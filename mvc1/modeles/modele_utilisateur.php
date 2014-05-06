<?php 
	function inscription($Role_ID,$pseudo,$adresse_email,$mot_de_passe_hache,$name,$prenom,$sexe,$date_de_naissance,$adresse){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO membre(Role_ID, pseudo, adresse_email, mot_de_passe, name, prenom, sexe, date_de_naissance, adresse, date_inscription) VALUES(:Role_ID, :pseudo, :adresse_email, :mot_de_passe, :name, :prenom, :sexe, :date_de_naissance, :adresse, NOW())');
	$req -> execute(array(
		'Role_ID' => $Role_ID,
		'pseudo' => $pseudo,
		'adresse_email' => $adresse_email,
		'mot_de_passe' => $mot_de_passe_hache,
		'name' => $name,
		'prenom' => $prenom,
		'sexe' => $sexe,
		'date_de_naissance' => $date_de_naissance,
		'adresse' => $adresse,
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
 ?>