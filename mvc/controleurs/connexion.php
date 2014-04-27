<?php 

	if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
	{

		include('vues/header.php');

		include('vues/vue_connexion.php');

		include('vues/footer.php');
	}else{
		include('../modeles/modele_news.php');
		session_start();
	    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
	    {
	        echo '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>
		<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
	    }
	    else //On check le mot de passe
	    {
	    	$bdd = new PDO('mysql:host=localhost;dbname=mydb','root','');

	    	$pseudo = $_POST['pseudo'];
			$password = $_POST['password'];
	        $query=$bdd->prepare('SELECT membre.mot_de_passe, membre.pseudo
	        FROM membre WHERE membre.pseudo = :pseudo');
	        $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
	        $query->execute();
	        $data=$query->fetch();
			if ($data['mot_de_passe'] == sha1($password)) // Acces OK !
			{
			    $_SESSION['pseudo'] = $data['pseudo'];
			    header('Location: ../index.php?action=connexion');
			} 
			else // Acces pas OK !
			{
			    echo  '<p>Une erreur s\'est produite 
			    pendant votre identification.<br /> Le mot de passe ou le pseudo 
		            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
			    pour revenir à la page précédente
			    <br /><br />Cliquez <a href="./index.php">ici</a> 
			    pour revenir à la page d accueil</p>';
			}
		    $query->CloseCursor();
	    }

	}


 ?>