<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php header( 'content-type: text/html; charset=utf-8' ); ?>
<title>Save ur show</title>
<link rel="stylesheet" href="ressources/style.css" type="text/css" media="screen" />

<body>

<header>
	<div id="logo">
	</div>

	<a href="?page=accueil"><div id="nom">
	</div></a>

	<div id="drapeau">
	<a href="?page=select_lang&lang=fr&current=<?php echo $_GET['page']; ?>"> <img src="ressources/image/drap_fr.png" alt="Version Française" /></a>
	<a href="?page=select_lang&lang=en&current=<?php echo $_GET['page']; ?>"> <img src="ressources/image/drap_en.png" alt="Version Anglaise"/></a>
	</div>

	<div id="connexion">
		<ul>
			<?php 
			if (!isset($_SESSION['pseudo'])){
				echo '
				<li class="zone1"><a href="?page=connexion">'.$CONNEXION.'</a></li>
				<li class="zone1"><a href="?page=inscription">'.$INSCRIPTION.'</a></li>';
			}else{
				echo'
				<li class="zone1"><a href="?page=profil&profil='.$_SESSION['pseudo'].'">'.$_SESSION['pseudo'].'</a></li>
				<li class="zone1"><a href="?page=deconnexion">'.$DECONNEXION.'</a></li>';
			}
			 ?>
		</ul>
	</div>

	<div id="artistes_salles">
		<ul>
			<li class="boutons1"><a href="?page=listeartiste"><?php echo $TXT_ARTISTES;?></a></li>
			<li class="boutons1"><a href="?page=listeSalles"><?php echo $TXT_SALLES;?></a></li>
		</ul>
	</div>

	<div id="forum_concerts">
		<ul>
			<li class="boutons2"><a href="?page=forum"><?php echo $TXT_FORUM;?></a></li>
			<li class="boutons2"><a href="?page=listeConcerts"><?php echo $TXT_CONCERTS;?></a></li>
		</ul>
	</div>

	<div class="Rechercher">
			<form action="index.php?page=recherche" method="post" name="Recherche">
			<label><?php echo $RECHERCHE;?></label><input type="text" name="mot_cle" id="mot_cle"/>
					<select name="type_recherche">
						<option value="1"><?php echo $TXT_ARTISTES;?></option>
						<option value="2"><?php echo $TXT_CONCERTS;?></option>
						<option value="3"><?php echo $TXT_SALLES;?></option>
					</select>
					<input type="submit" value="<?php echo $TXT_CHERCHER ;?>">
			</form>
	</div>

	<span id="bordure">

	<div id="Suivre"><span class="a3"><?php echo $TXT_SUIVRE;?></span>
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
		<p> <?php echo $TXT_CONNECTES;?> <?php echo $nbrVisite; ?> <br />
			<?php echo $TXT_INSCRITS;?> <?php echo $nbrInscrit; ?>
		</p>
	</div>

	</span>
</header>
<div id="contenu">