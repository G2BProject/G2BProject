
	<meta charset="utf-8" />
<?php 

	if (empty($_POST['categorie_forum_ID'])) {
	
	
include('vues/vue_discussion.php');


	
	
}else{

	$categorie_forum_ID = $_POST['categorie_forum_ID'];

	if(empty($_POST['sous_categorie_forum']))
	{
	echo "<script>alert(\"veuillez preciser le sujet\")</script>"; 

			 echo '<script LANGUAGE="JavaScript">
document.location.href="index.php?page=discussion" </script>'; 
	die;
	} 
	if(!empty($_POST['sous_categorie_forum']))
	{

	
	
		$sous_categorie_forum = $_POST['sous_categorie_forum'];
		$req = $bdd -> prepare('SELECT sous_categorie_forum FROM sous_categorie_forum WHERE sous_categorie_forum = :sous_categorie_forum');
		$req -> execute(array('sous_categorie_forum' => $sous_categorie_forum));
		$res = $req->fetch();
		if($res)
		{ 
			echo "<script>alert(\"le sujet existe deja\")</script>";
			
			 echo '<script LANGUAGE="JavaScript">
document.location.href="index.php?page=discussion" </script>'; 
die;
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

		echo "<script>alert(\"le sujet a bien été créé\")</script>";
			
			 echo '<script LANGUAGE="JavaScript">
document.location.href="index.php?page=forum" </script>';
		
}

 ?>