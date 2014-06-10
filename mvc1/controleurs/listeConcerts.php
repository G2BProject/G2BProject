<?php 
include('modeles/modele_concert.php');
if(empty($_POST['departement'])){
	//$reqSalles=listSalles();
	if(isset($_SESSION['pseudo'])){
		$reqConcertDep= listConcertDep($_SESSION['departement']);
	}
	include('vues/header.php');
	include('vues/vue_concerts.php');
	include('vues/footer.php');
	}else{
	include('vues/header.php');
	$reqConcertDep= listConcertDep($_POST['departement']);
	include('vues/vue_concerts.php');
	include('vues/footer.php');
	}
?>