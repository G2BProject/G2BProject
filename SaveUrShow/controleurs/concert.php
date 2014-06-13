<?php 
include('modeles/modele_concert.php');
//on executera ici les fonctions du modèle dont nous aurons besoin.
	$nom = $_GET['concert'] ;
	$info = infoConcert($nom) ;


include('vues/header.php');


include('vues/vue_concert.php');


include('vues/footer.php');

 ?>