<!doctype html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Save ur show</title>
<link rel="stylesheet" href="style_menu.css" type="text/css" media="screen" />
<link rel="stylesheet" href="current.css" type="text/css" media="screen" />

<body>

<header>
	<div id="menu">
	</div>

	<div id="logo">
	</div>

	<div id="nom">
	</div>

	<div id="drapeau">
		<img src="image/drap_fr.png"/> <img src="image/drap_en.png"/>
	</div>

	<div id="connexion">
		<ul>
			<li class="zone1"><a href="#">Connexion</a></li>
			<li class="zone1"><a href="inscription.html">Inscription</a></li>
		</ul>
	</div>

	<div id="artistes_salles">
		<ul>
			<li class="boutons1"><a href="new2.html">Artistes</a></li>
			<li class="boutons1"><a href="new3.html">Salles</a></li>
		</ul>
	</div>

	<div id="forum_concerts">
		<ul>
			<li class="boutons2"><a href="forum.html">Forum</a></li>
			<li class="boutons2"><a href="new5.html">Concerts</a></li>
		</ul>
	</div>

	<span class="Rechercher">rechercher:</span>

	<span id="bordure">

	<div id="Suivre"><span class="a3">Suivez-nous!</span>
	</div>

	<div class="reseaux">
		<div> <a href=" https://www.facebook.com/"> <img class="reseauxsociaux" src="image/facebook.png" /></a> <span></span>
		</div> 
		<div> <a href="https://twitter.com/"> <img class="reseauxsociaux" src="image/twitter.png"/></a> <span></span>
		</div> 
		<div> <a href="https://plus.google.com/"> <img class="reseauxsociaux" src="image/g.png"/></a> <span></span>
		</div> 
	</div>	

	<div class="statistique">
		<p> Connectés: <br />
			Nombre d'inscrits:
		</p>
	</div>

	</span>
</header>
<div id="contenu">
	<?php
		$contenu= "contenu";
		echo $contenu;		 
	?>
</div>
<footer>
<div id="boutons_bas">
	<ul>
		<li class="boutons3"><a href="#">FAQ</a></li>
		<li class="boutons3"><a href="#">Contacts</a></li>
	</ul>
</div>
</footer>

</body>
</html>