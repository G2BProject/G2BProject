<?php    
	$_SESSION['lang'] = $_GET['lang'];

	if ($_SESSION['lang']=='en') {
		include('controleurs/en.php');
}else{
		include('controleurs/fr.php');
}
	include('controleurs/accueil.php');
?>