<?php 
include('modeles/modele_news.php');
//on executera ici les fonction du modèle dont nous aurons besoin.
$actu= getActu();

$IDTop= getIDTop();
$artiste1= getArtiste($IDTop['ID_artiste1']);
$artiste2= getArtiste($IDTop['ID_artiste2']);
$artiste3= getArtiste($IDTop['ID_artiste3']);

$IDCoeur = getIDCoeur();
$coeur1= getArtiste($IDCoeur['ID_artiste1']);
$coeur2= getArtiste($IDCoeur['ID_artiste2']);

$newArtiste = getNewArtiste();

$lastConcert= getLastConcert();
include('vues/header.php');

include('vues/vue_accueil.php');


include('vues/footer.php');

 ?>