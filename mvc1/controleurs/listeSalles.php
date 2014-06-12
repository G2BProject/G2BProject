	<?php 
	include('modeles/modele_salle.php');
	$reqSallesDep = listSalles();
	include('vues/header.php');
	include('vues/vue_salles.php');

	include('vues/footer.php');
	?>