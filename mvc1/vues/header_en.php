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
	<a href="?lang=fr"><img src="ressources/image/drap_fr.png" alt="Version française" titre="version française" /></a>
	<a href="?lang=en"><img src="ressources/image/drap_en.png" alt="Version anglaise" titre="version anglaise"/></a>
	</div> 

	<div id="connexion">
		<ul>
			<?php 
			if (!isset($_SESSION['pseudo'])){
				echo '
				<li class="zone1"><a href="?page=connexion">Log in</a></li>
				<li class="zone1"><a href="?page=inscription">Sign in!</a></li>';
			}else{
				echo'
				<li class="zone1"><a href="?page=profil&profil='.$_SESSION['pseudo'].'">'.$_SESSION['pseudo'].'</a></li>
				<li class="zone1"><a href="?page=deconnexion">Log out!</a></li>';
			}
			 ?>
		</ul>
	</div>

	<div id="artistes_salles">
		<ul>
			<li class="boutons1"><a href="?page=listeartiste">Artistes</a></li>
			<li class="boutons1"><a href="?page=listeSalles"></a></li>
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
			<label>Search:</label><input type="text" name="mot_cle" id="mot_cle"/>
					<select name="type_recherche">
						<option value="1">Artist</option>
						<option value="2">Concert</option>
						<option value="3">Room</option>
					</select>
					<input type="submit" value="Submit">
			</form>
	</div>

	<span id="bordure">

	<div id="Suivre"><span class="a3">Follow us!</span>
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
		<p> Connected: 1856247 <br />
			Subscribers: 1
		</p>
	</div>

	</span>
</header>
<div id="contenu">