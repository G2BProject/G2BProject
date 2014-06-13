<?php 

if(!empty($_GET['artiste'])){ 
	$nom_artiste= $_GET['artiste'];
	include('modeles/modele_artiste.php');
	//$info = $bdd->query('SELECT nom_artiste, date_ajout_artiste, image_artiste, bio_artiste FROM artiste WHERE artiste.nom_artiste = :nom_artiste');

		// $query=$bdd->prepare('SELECT artiste.nom_artiste, artiste.date_ajout_artiste, artiste.image_artiste, artiste.bio_artiste, ID_genre
	 //    FROM artiste WHERE artiste.nom_artiste = :nom_artiste');
  //       $query->bindValue(':nom_artiste',$nom_artiste, PDO::PARAM_STR);
  //       $query->execute();
	 //    $data_artiste=$query->fetch();
	    $data_artiste= pageArtiste($nom_artiste);
	include('vues/header.php');

	
	include('vues/vue_artiste.php');


	include('vues/footer.php');

}else{
	include('controleurs/accueil.php');
}

 ?>