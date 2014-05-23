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
			if (!isset($_SESSION['pseudo'])){
				echo '
				<li class="zone1"><a href="?page=connexion">Connexion</a></li>
				<li class="zone1"><a href="?page=inscription">Inscription</a></li>';
			}else{
				echo'
				<li class="zone1"><a href="?page=profil">'.$_SESSION['pseudo'].'</a></li>
				<li class="zone1"><a href="?page=deconnexion">Deconnexion</a></li>';
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
			<li class="boutons2"><a href="?page=concert">Concerts</a></li>
		</ul>
	</div>

	<div class="Rechercher">
			<form action="index.php?page=recherche" method="post" name="Recherche">
			<label>Recherche:</label><input type="text" name="mot_cle" id="mot_cle"/>
					<select name="type_recherche">
						<option value="1">Artiste</option>
						<option value="2">Concert</option>
						<option value="3">Salle</option>
					</select>
					<input type="submit" value="chercher">
			</form>
	</div>

	<span id="bordure">

	<div id="Suivre"><span class="a3">Suivez-nous!</span>
	</div>

	<div class="reseaux">
		<div> <a href="https://www.facebook.com/pages/Save-Ur-Show/281799091982222?fref=ts"> <img class="reseauxsociaux" src="ressources/image/facebook.png" /></a> <span></span>
		</div> 
		<div> <a href="https://twitter.com/SaveUrShow01"> <img class="reseauxsociaux" src="ressources/image/twitter.png"/></a> <span></span>
		</div> 
		<div> <a href="https://plus.google.com/"> <img class="reseauxsociaux" src="ressources/image/g.png"/></a> <span></span>
		</div> 
	</div>	

	<div class="statistique">
		<p> Connectés: 1856247 <br />
			Inscrits: 1
		</p>
	</div>
	
	<p><a class="ajout" href="index.php?page=ajoutArtiste"> Ajouter un artiste</a></p>
	<p><a class="ajout" href="index.php?page=ajoutConcert"> Ajouter un concert</a></p>
	<p><a class="ajout" href="index.php?page=ajoutSalle"> Ajouter une salle</a></p>

	</span>
</header>
<div id="contenu">