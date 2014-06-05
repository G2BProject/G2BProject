<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=mydb','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php') ){
	include('controleurs/'.$_GET['page'].'.php');
}else{
	include('controleurs/accueil.php');
}

 ?>