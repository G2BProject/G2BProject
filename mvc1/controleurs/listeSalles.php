	<?php 
	include('modeles/modele_salle.php');
	$reqSalles = listSalles();
	include('vues/header.php');
	include('vues/vue_salles.php');

	include('vues/footer.php');
	?>