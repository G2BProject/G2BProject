<?php 
		
if(!empty($_GET['Action']) ){
	include('modèles/modèle_news.php');
//on executera ici les fonction du modèle dont nous aurons besoin.



	include('vues/header.php');
	


	include('vues/vue_Artiste.php');


	include('vues/footer.php');

}else{
	include('controleurs/AccueilController.php');
}

 ?>