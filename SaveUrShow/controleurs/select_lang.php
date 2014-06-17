<?php    
	$_SESSION['lang'] = $_GET['lang'];

	if ($_SESSION['lang']=='en') {
		include('controleurs/en.php');
}else{
		include('controleurs/fr.php');
}
	if($_GET['current']!="select_lang"){
		include('controleurs/'.$_GET['current'].'.php');
	}else{
		include('controleurs/accueil.php');
	}
?>