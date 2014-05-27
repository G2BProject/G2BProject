	<?php 
	include('modeles/modele_salle.php');
	$reqSalles=listSalles();
	if(isset($_SESSION['pseudo'])){
		$reqSallesDep= listSallesDep($_SESSION['departement']);
	}
	include('vues/header.php');
	include('vues/vue_salles.php');

	include('vues/footer.php');
	?>