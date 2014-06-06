<?php 
$bdd = new PDO('mysql:host=localhost;dbname=mydb','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

include('modeles/modele_stat.php');
session_start();
if(!isset($_SESSION['new_visite'])){
        $_SESSION['new_visite'] = 'done';
        incraseVisite();
}
$nbrVisite= nbrvisite();
$nbrInscrit= nbrInscrit();
if(!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php') ){
	include('controleurs/'.$_GET['page'].'.php');
}else{
	include('controleurs/accueil.php');
}

 ?>