<div class="container1">
<div class="titre1"><a href="#"><img src="ressources/image/actus.png"/></a></div>
<div class="box1"><?php echo $actu['texte'] ?></div>
<a href="#"><img class="photo" src=<?php echo '"'.$actu['photo'].'"' ?>/></a>
</div>

<div class="container2">
<div class="titre2">TOP 3 DES ARTISTES</div>
<div class="box2">
	<ol>
		<li class=""><a href="#"><img class="artistes" src="ressources/image/pharrell.png"/><?php echo $artiste1['nom_artiste'] ?></a></li>
		<li class=""><a href="#"><img class="artistes" src="ressources/image/daftpunk.png"/><?php echo $artiste2['nom_artiste'] ?></a></li>
		<li class=""><a href="#"><img class="artistes" src="ressources/image/shakira.png"/><?php echo $artiste3['nom_artiste'] ?></a></li>
	</ol>	
</div>
</div>

<div class="container3">
<div class="titre3">NOUVEAUX ARTISTES</div>
<div class="box3">
	<ul>
		<li class=""><a href="#"> <img class="new" src="ressources/image/gvincent.png"/><?php echo $newArtiste[0]['nom_artiste'] ?></a></li>
		<li class=""><a href="#"> <img class="new" src="ressources/image/fauve.png"/><?php echo $newArtiste[1]['nom_artiste'] ?></a></li>
		<li class=""><a href="#"> <img class="new" src="ressources/image/hypfou.png"/><?php echo $newArtiste[2]['nom_artiste'] ?></a></li>
	</ul>
</div>
</div>

<div class="container4">
<div class="titre4">CONCERTS A VENIR</div>
<div class="box4">
<br />
	<ul>
		<li><a href="#"><?php echo $lastConcert[0]['nom_du_concert'] ?></a><br /> <br /> 
		<li><a href="#"><?php echo $lastConcert[1]['nom_du_concert'] ?></a></li>
		
	</ul>
</div>
</div>

<div class="container5">
<div class="titre5">COUPS DE COEUR</div>
<div class="box5">
	<ul>
		<li class=""><a href="#"><img class="coeur" src="ressources/image/beyonce.png"/><?php echo $coeur1['nom_artiste'] ?></a></li>
		<li class=""><a href="#"><img class="coeur" src="ressources/image/sevran.png"/><?php echo $coeur2['nom_artiste'] ?></a></li>
	</ul>
</div>
</div>

<div style="clear:both;"></div>
</div>