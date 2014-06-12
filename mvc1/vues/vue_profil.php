<div class="Profil">

	<div class="container1Profil">
		<div class="modifier_profil"><a href="#"> <?php echo $MODIF ?></a></div>
		<div ><img class="photo_profil" src=<?php 
		if(empty($info['image_membre'])){
		echo '"ressources/avatars/defaultPicture.jpg"';
		}else{
		echo '"'.$info['image_membre'].'"';
		}?>/></div>
		<div class="date_insc"><?php echo $DATE_INSCRIT ?> : <?php echo $info['date_inscription'] ; ?></div>
		<div class="pseudo"><?php echo $TXT_PSEUDO ?> : <?php echo $info['pseudo']; ?></div>
		<ul>
			<li class="txt1Profil"><?php echo $ADRESSE ?> : <?php echo $info['adresse_membre']; ?></li>
			<li class="txt1Profil"><?php echo $TXT_NAISSANCE ?> : <?php echo $info['date_de_naissance']; ?></li>
			<li class="txt1Profil"><?php echo $TXT_MAIL ?> : <?php echo $info['adresse_email']; ?></li>
			<li class="txt1Profil"><?php echo $BIO ?> : <?php echo $info['bio_membre']; ?></li>
			<li class="txt1Profil">
			<?php 
			if($info['role_ID']==1){

				}elseif($info['role_ID']==2){
				echo'	<p><a class="ajout" href="index.php?page=ajoutArtiste"> '.$AJOUT_ARTISTE.'</a></p>
					<p><a class="ajout" href="index.php?page=ajoutConcert"> '.$AJOUT_CONCERT.'</a></p> ';

				}elseif($info['role_ID']==3){
					echo'
					<p><a class="ajout" href="index.php?page=ajoutSalle"> '.$AJOUT_SALLE.'</a></p>
					<p><a class="ajout" href="index.php?page=ajoutConcert"> '.$AJOUT_CONCERT.'</a></p>';
				}elseif($info['role_ID']==4){
					echo'
					<a class="ajout" href="index.php?page=backOffice"> '.$ADMIN.'</a></br>
					<p><a class="ajout" href="index.php?page=ajoutArtiste"> '.$AJOUT_ARTISTE.'</a>
					<a class="ajout" href="index.php?page=ajoutSalle"> '.$AJOUT_SALLE.'</a></p>
					<p><a class="ajout" href="index.php?page=ajoutConcert"> '.$AJOUT_CONCERT.'</a>';
				}
			?></li>
		</ul>
	</div>

	<div class="container2Profil">
		<div class="txt2Profil"> <?php echo $VENIR ?> : </div>
		<ul>
			<li class="txt3Profil"><?php echo $NOM_ARTISTE ?></li>
			<li class="txt1bisProfil"><?php echo $DATE_CONCERT ?> : </li>
			<li class="txt1bisProfil"><?php echo $LIEU ?> : </li>
			<li class="txt1bisProfil"><?php echo $NOM_SALLE ?> : </li>
		</ul>
		<div ><a href='#'><img class="photo_concertavenir" src "groupex.jpg"/></a></div>
	</div>

	<div class="container3Profil">
		<div class="txt2Profil"> <?php echo $PREFERE ?>: </div>
		<ul>
			<li class="txt3Profil"><?php echo $NOM_ARTISTE ?> 1 :</li>
			<li class="txt3Profil"><?php echo $NOM_ARTISTE ?> 2 :</li>
			<li class="txt3Profil"><?php echo $NOM_ARTISTE ?> 3 :</li>
		</ul>
	</div>

	<div class="container4Profil">
		<div class="txt2Profil"> <?php echo $MES_GENRES ?>:</div>
		<ul>
			<li class="txt3Profil"><?php echo $GENRE ?> 1 :</li>
			<li class="txt3Profil"><?php echo $GENRE ?> 2 :</li>
			<li class="txt3Profil"><?php echo $GENRE ?> 3 :</li>
		</ul>
	</div>

</div>