<?php 

if (empty($_POST['categorie_forum_ID'])) {
	
	
include('vues/vue_discussion.php');


	
	
}else{

	$categorie_forum_ID = $_POST['categorie_forum_ID'];

	if(!isset($_POST['sous_categorie_forum']))
	{
		die('Veuillez préciser le sujet');
	} 
	if(isset($_POST['sous_categorie_forum']))
	{

	
	
		$sous_categorie_forum = $_POST['sous_categorie_forum'];
		$req = $bdd -> prepare('SELECT sous_categorie_forum FROM sous_categorie_forum WHERE sous_categorie_forum = :sous_categorie_forum');
		$req -> execute(array('sous_categorie_forum' => $sous_categorie_forum));
		$res = $req->fetch();
		if($res)
		{ 
			die('le sujet existe deja');
		} 
	}
	
	else
	{
		die('Choisissez un autre sujet');
	}

	$sous_categorie_forum = $_POST['sous_categorie_forum'];
	$categorie_forum_ID = $_POST['categorie_forum_ID'];


	$req = $bdd->prepare('INSERT INTO sous_categorie_forum(sous_categorie_forum, categorie_forum_ID) VALUES(:sous_categorie_forum, :categorie_forum_ID )');
		$req->execute(array(
		
	'sous_categorie_forum' => $sous_categorie_forum,
	'categorie_forum_ID' => $categorie_forum_ID,
		
	));

		include('controleurs/forum.php');
}

 ?>