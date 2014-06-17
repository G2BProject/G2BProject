<?php 
	if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
	{

		include('vues/header.php');

		include('vues/vue_connexion.php');

		include('vues/footer.php');
	}else{
		include('modeles/modele_utilisateur.php');
	    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
	    {
	    	include('vues/header.php');

	        echo '<div class="titre1"><p>'.$ERREUR.'.
		'.$CHAMPS.'</p>
		<p> <a href="?page=connexion">'.$_ICI.'</a> '.$_REVENIR.'</p></div>';
			include('vues/footer.php');
	    }
	    else //On check le mot de passe
	    {
	    	$pseudo = $_POST['pseudo'];
			$password = $_POST['password'];
	        $data= connexion($pseudo,$password);
			if ($data['mot_de_passe'] == sha1($password)) // Acces OK !
			{
			    $_SESSION['pseudo'] = $data['pseudo'];
			    $_SESSION['mot_de_passe'] = $data['mot_de_passe'];
			    $_SESSION['departement'] = $data['departement'];
			    $_SESSION['Role_ID'] = $data['Role_ID'];
			   	include('controleurs/accueil.php');
			    
			} 
			else // Acces pas OK !
			{
				include('vues/header.php');
			    echo  '<div class="titre1"><p>'.$ERREUR.'.<br /> '.$_ERREUR.'.</p><p> <a href="?page=connexion">'.$_ICI.'</a> 
			    '.$RETOUR_PAGE.'
			    <br /><br /><a href="index.php">'.$_ICI.'</a> 
			    '.$RETOUR_ACCUEIL.'</p> </div>';
				include('vues/footer.php');
			}
	    }

	}
 ?>