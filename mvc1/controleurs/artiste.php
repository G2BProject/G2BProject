<?php 

if(!empty($_GET['name'])){ 
	$nom_artiste= $_GET['name'];

	$info = $bdd->query('SELECT nom, date_de_creation, image, bio FROM artiste WHERE artiste.nom = :nom_artiste');

		$query=$bdd->prepare('SELECT artiste.nom, artiste.date_de_creation, artiste.image, artiste.bio
	    FROM artiste WHERE artiste.nom = :nom_artiste');
        $query->bindValue(':nom_artiste',$nom_artiste, PDO::PARAM_STR);
        $query->execute();
	    $data_artiste=$query->fetch();

	include('vues/header.php');

	
	include('vues/vue_artiste.php');


	include('vues/footer.php');

}else{
	include('controleurs/accueil.php');
}

 ?>