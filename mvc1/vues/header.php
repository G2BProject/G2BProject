<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Save ur show</title>
<link rel="stylesheet" href="ressources/style.css" type="text/css" media="screen" />

<body>

<header>
	<div id="logo">
	</div>

	<a href="?page=accueil"><div id="nom">
	</div></a>

	<div id="drapeau">
		<img src="ressources/image/drap_fr.png"/> <img src="ressources/image/drap_en.png"/>
	</div>

	<div id="connexion">
		<ul>
			<?php 
			if (empty($GLOBALS['connexion']) or $GLOBALS['connexion']=='FALSE'){
				echo '
				<li class="zone1"><a href="?page=connexion">Connexion</a></li>
				<li class="zone1"><a href="?page=inscription">Inscription</a></li>';
			}else{
				echo'
				<li class="zone1"><a href="?page=none">Profil</a></li>
				<li class="zone1"><a href="?page=deconnexion.php">Deconnexion</a></li>';
			}
			 ?>
		</ul>
	</div>

	<div id="artistes_salles">
		<ul>
			<li class="boutons1"><a href="?page=listeartiste">Artistes</a></li>
			<li class="boutons1"><a href="?page=salles">Salles</a></li>
		</ul>
	</div>

	<div id="forum_concerts">
		<ul>
			<li class="boutons2"><a href="?page=forum">Forum</a></li>
			<li class="boutons2"><a href="?page=Concerts">Concerts</a></li>
		</ul>
	</div>

	<span class="Rechercher">rechercher:</span>

	<span id="bordure">

	<div id="Suivre"><span class="a3">Suivez-nous!</span>
	</div>

	<div class="reseaux">
		<div> <a href=" https://www.facebook.com/"> <img class="reseauxsociaux" src="ressources/image/facebook.png" /></a> <span></span>
		</div> 
		<div> <a href="https://twitter.com/"> <img class="reseauxsociaux" src="ressources/image/twitter.png"/></a> <span></span>
		</div> 
		<div> <a href="https://plus.google.com/"> <img class="reseauxsociaux" src="ressources/image/g.png"/></a> <span></span>
		</div> 
	</div>	

	<div class="statistique">
		<p> Connectés: 5 <br />
			Inscrits: 96
		</p>
	</div>

	</span>
</header>
<div id="contenu">