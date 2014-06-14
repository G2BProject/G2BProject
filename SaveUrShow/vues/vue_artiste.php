<div class="contenuArtiste">
	<div class="container6">
		<div id="photo">
			<p class="txt"><?php echo $data_artiste['nom_artiste']; ?>
			</p>
			<ul>
				<li class="caract"><div class="txt2" href="#"><a class="styleartiste"><?php echo $QUI ?> </a>   Nom du ou des artistes se produisant sous le nom indiqué</div></li>
				<li class="caract"><div class="txt2"href="#"><a class="styleartiste"><?php echo $STYLE ?> </a>:   Type de musique jouée, caractéristiques musicales de l'artiste</div></li>
				<li class="caract"><div class="txt2"href="#"><a class="styleartiste"><?php echo $A_VENIR ?> </a>:   Date du prochain évènement impliquant l'artiste avec éventuellement le lien y renvoyant</div></li>
				<li class="caract"><div class="txt2"href="#"><a class="styleartiste">   <?php echo $PRODUCTION ?> </a>:    Nom et date de la dernière production de l'artiste</div></li>
				<li class="caract"><div class="txt2"href="#"><a class="styleartiste">   <?php echo $NBR_FAN ?></a>:    XXX</div></li>
			</ul>
			<div class="fanartiste"><?php echo $DEVENIR_FAN ?></div>
		</div>
	</div>

	<div class="container7">
		<div><a href="#"><img class="barre" /></a></div>
		<div><a href="#"><img class="liste" /></a></div>
		<div class="mailartiste"><?php echo $RECEVOIR_ACTU ?> <?php echo $data_artiste['nom_artiste']; ?> <?php echo $PAR_MAIL ?></div>
	</div>

	<div class="container8">
		<div><a class="txt3" ><?php echo $BIO ?></a></div>
		<div><a class="txtbio" ><?php echo $data_artiste['bio_artiste']; ?> </a></div>
		
	</div>
	<div class="container9">
			<div><a href="#"><img class="user" /></a></div>
		<div><a class="txt4" href="#"><?php echo $TXT_NOM_UTILISATEUR ?> :</a></div>
		<div><a class="txt4" href="#"><?php echo $DATE ?> :</a></div>
		<div><a class="txt4" href="#"><?php echo $COMM ?> :</a></div>
		<div class="formulaireartiste">
			<form method="post" action="traitement.php">
				<p><label class=""></label>
				<textarea name="post" rows ="5" cols="40" id="postartiste"></textarea></p>
				<div><a class="txt5" href="#"><?php echo $PUBLIER ?></a></div>
			</form>
		</div>
	</div>

	<div class="container10">
		<ul>
			<div><a class="txt6" href="#"><?php echo $POST ?> :</a></div>
		</ul>
		
		<div class="container11">
			<div><a href="#"><img class="user2" /></a></div>
			<div><a class="txt7" href="#"><?php echo $TXT_PSEUDO ?></a></div>
			<div><a class="txt8" href="#"><?php echo $DATE_POST ?></a></div>
			<div><a class="txt8" href="#">Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post</a></div>
			
			<div><a href="#"><img class="user2"></a></div>
			<div><a class="txt7" href="#"><?php echo $TXT_PSEUDO ?></a></div>
			<div><a class="txt8" href="#"><?php echo $DATE_POST ?></a></div>
			<div><a class="txt8" href="#">Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post</a></div>
		</div>
	</div>
	
</div>
<div style="clear:both;"></div>

</div>
