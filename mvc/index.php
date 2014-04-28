<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mydb','root','');
/*if(!empty($_GET['action']) AND $_GET['action']=='connexion'){
	$GLOBALS['connexion'] = 'TRUE';
}*/
if(!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php') ){
	include('controleurs/'.$_GET['page'].'.php');
}else{
	include('controleurs/accueil.php');
}

 ?>