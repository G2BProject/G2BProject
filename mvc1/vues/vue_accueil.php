<div class="container1">
<div class="titre1"><a href="#"><img src="ressources/image/actus.png"/></a></div>
<div class="box1"><?php echo $actu['texte'] ?></div>
<a href="#"><img class="photo" src=<?php echo '"'.$actu['photo'].'"' ?>/></a>
</div>

<div class="container2">
<div class="titre2"><?php echo $_TOP_ARTISTE ?></div>
<div class="box2">
	<ol>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$artiste1['nom_artiste'].'"' ?>><img class="artistes" src=<?php echo '"'.$artiste1['image_artiste'].'"' ?>/><?php echo $artiste1['nom_artiste'] ?></a></li>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$artiste2['nom_artiste'].'"' ?>><img class="artistes" src=<?php echo '"'.$artiste2['image_artiste'].'"' ?>/><?php echo $artiste2['nom_artiste'] ?></a></li>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$artiste3['nom_artiste'].'"' ?>><img class="artistes" src=<?php echo '"'.$artiste3['image_artiste'].'"' ?>/><?php echo $artiste3['nom_artiste'] ?></a></li>
	</ol>	
</div>
</div>

<div class="container3">
<div class="titre3"><?php echo $_NEW_ARTISTE ?></div>
<div class="box3">
	<ul>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$newArtiste[0]['nom_artiste'].'"' ?>> <img class="new" src=<?php echo '"'.$newArtiste[0]['image_artiste'].'"' ?>/><?php echo $newArtiste[0]['nom_artiste'] ?></a></li>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$newArtiste[1]['nom_artiste'].'"' ?>> <img class="new" src=<?php echo '"'.$newArtiste[1]['image_artiste'].'"' ?>/><?php echo $newArtiste[1]['nom_artiste'] ?></a></li>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$newArtiste[2]['nom_artiste'].'"' ?>> <img class="new" src=<?php echo '"'.$newArtiste[2]['image_artiste'].'"' ?>/><?php echo $newArtiste[2]['nom_artiste'] ?></a></li>
	</ul>
</div>
</div>

<div class="container4">
<div class="titre4"><?php echo $VENIR ?></div>
<div class="box4">
	<ul>
		<li><a href=<?php echo '"?page=concert&concert='.$lastConcert[0]['nom_du_concert'].'"' ?>><img class="coeur" src=<?php echo '"'.$lastConcert[0]['image_concert'].'"' ?>/><?php echo $lastConcert[0]['nom_du_concert'] ?></a></li>
		<li><a href=<?php echo '"?page=concert&concert='.$lastConcert[1]['nom_du_concert'].'"' ?>><img class="coeur" src=<?php echo '"'.$lastConcert[1]['image_concert'].'"' ?>/><?php echo $lastConcert[1]['nom_du_concert'] ?></a></li>
		
	</ul>
</div>
</div>

<div class="container5">
<div class="titre5"><?php echo $COEUR ?></div>
<div class="box5">
<br>
	<ul>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$coeur1['nom_artiste'].'"' ?>><img class="coeur" src=<?php echo '"'.$coeur1['image_artiste'].'"' ?>/><?php echo $coeur1['nom_artiste'] ?></a></li>
		<li class=""><a href=<?php echo '"?page=artiste&artiste='.$coeur2['nom_artiste'].'"' ?>><img class="coeur" src=<?php echo '"'.$coeur2['image_artiste'].'"' ?>/><?php echo $coeur2['nom_artiste'] ?></a></li>
	</ul>
</div>
</div>

<div style="clear:both;"></div>
</div>