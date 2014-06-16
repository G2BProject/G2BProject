<div class="Profil">

		<div class="container1Profil">
		<br />
		<br >
		<img class="photo_profil" src=<?php echo $info['image_concert']; ?>>
		<div class="pseudo"><?php echo $NOM_CONCERT ?> : <?php echo $info['nom_du_concert']; ?></div>
		<ul>
			<li class="txt1Profil"><?php echo $NOM_SALLE ?> : <?php echo $info['nom_de_la_salle']; ?></li>
			<li class="txt1Profil"><?php echo $PLACE ?> : <?php echo $info['nombre_de_place']; ?></li>
			<li class="txt1Profil"><?php echo $DATE_CONCERT ?> : <?php echo $info['date_du_concert']; ?></li>
			<li class="txt1Profil"><?php echo $HEURE_CONCERT ?> : <?php echo $info['heure_du_concert']; ?></li>
			<li class="txt1Profil"><?php echo $NUM ?> : <?php echo $info['numero_de_telephone']; ?></li>
		</ul>
	</div>

</div>