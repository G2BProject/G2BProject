<?php 
include('modeles/modele_salle.php');
if(empty($_POST['departement'])){
	//$reqSalles=listSalles();
	if(isset($_SESSION['pseudo'])){
		$reqSallesDep = listSallesDep($_SESSION['departement']);
	}
	include('vues/header.php');
	include('vues/vue_salles.php');
	include('vues/footer.php');
	}else{
	include('vues/header.php');
	$reqSallesDep = listSallesDep($_POST['departement']);
	include('vues/vue_salles.php');
	include('vues/footer.php');
	}
?>
