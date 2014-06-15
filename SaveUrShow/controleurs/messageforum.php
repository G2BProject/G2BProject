<?php 

$post=$_GET['post'];
		$query1=$bdd->prepare('SELECT ID FROM sous_categorie_forum WHERE sous_categorie_forum = :post');
        $query1->bindValue(':post',$post, PDO::PARAM_STR);
        $query1->execute();
	    $data1=$query1->fetch();
	    $topic_ID=$data1['ID'];

		
		$query=$bdd->prepare('SELECT titre_message, contenu_message, date_ajout_message, membre_ID FROM message_forum WHERE topic_ID = :topic_ID ORDER BY date_ajout_message');
        $query->bindValue(':topic_ID',$topic_ID, PDO::PARAM_STR);
        $query->execute();


include('vues/vue_creationmessage.php');
require('modeles/modele_messages.php');




global $post;





if (isset($_POST['contenu_message'])) {
		$pseudo=$_SESSION['pseudo'];
		$query=$bdd->prepare('SELECT ID FROM membre WHERE pseudo = :nom');
        $query->bindValue(':nom',$pseudo, PDO::PARAM_STR);
        $query->execute();
	    $data=$query->fetch();
	    $membre_ID= $data['ID'];
		$query1=$bdd->prepare('SELECT ID FROM sous_categorie_forum WHERE sous_categorie_forum = :post');
        $query1->bindValue(':post',$post, PDO::PARAM_STR);
        $query1->execute();
	    $data1=$query1->fetch();
	    $topic_ID=$data1['ID'];


		$req = $bdd->prepare('INSERT INTO message_forum(titre_message, contenu_message, membre_ID, topic_ID, date_ajout_message) VALUES(:titre_message,:contenu_message, :membre_ID, :topic_ID,NOW())');
		$req -> execute(array(
		'titre_message' => $_POST['titre_message'],
		'contenu_message' => $_POST['contenu_message'],
		'membre_ID' => $membre_ID,
		'topic_ID' => $topic_ID,
		));

}

 ?>