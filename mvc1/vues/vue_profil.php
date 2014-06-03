<div class="Profil">

	<div class="container1Profil">
		<div class="modifier_profil"><a href="#"> Modifier</a></div>
		<div ><a href='#'><img class="photo_profil" src "h/f.png"/> </a></div>
		<div class="date_insc">Date d'inscription:<?php echo $info['date_inscription']; ?></div>
		<div class="pseudo">Pseudo:<?php echo $info['pseudo']; ?></div>
		<ul>
			<li class="txt1Profil">Adresse : <?php echo $info['adresse_membre']; ?></li>
			<li class="txt1Profil">Date de naissance: <?php echo $info['date_de_naissance']; ?></li>
			<li class="txt1Profil">Mail: <?php echo $info['adresse_email']; ?></li>
			<li class="txt1Profil">bio: <?php echo $info['bio_membre']; ?></li>
			<li class="txt1Profil">
			<?php 
			if($info['role_ID']==1){

				}elseif($info['role_ID']==2){
				echo'	<p><a class="ajout" href="index.php?page=ajoutArtiste"> Ajouter un artiste</a></p>
					<p><a class="ajout" href="index.php?page=ajoutConcert"> Ajouter un concert</a></p> ';

				}elseif($info['role_ID']==3){
					echo'
					<p><a class="ajout" href="index.php?page=ajoutSalle"> Ajouter une salle</a></p>
					<p><a class="ajout" href="index.php?page=ajoutConcert"> Ajouter un concert</a></p>';
				}elseif($info['role_ID']==4){
					echo'
					<p><a class="ajout" href="index.php?page=ajoutArtiste"> Ajouter un artiste</a>
					<a class="ajout" href="index.php?page=ajoutSalle"> Ajouter une salle</a></p>
					<p><a class="ajout" href="index.php?page=ajoutConcert"> Ajouter un concert</a>
					<a class="ajout" href="index.php?page=ajoutConcert"> Ajouter un concert</a></p>';
				}
			?></li>
		</ul>
	</div>

	<div class="container2Profil">
		<div class="txt2Profil"> Concerts à venir: </div>
		<ul>
			<li class="txt3Profil">Nom de l'artiste</li>
			<li class="txt1bisProfil">Date du concert:</li>
			<li class="txt1bisProfil">Lieu:</li>
			<li class="txt1bisProfil">Nom de la salle:</li>
		</ul>
		<div ><a href='#'><img class="photo_concertavenir" src "groupex.jpg"/></a></div>
	</div>

	<div class="container3Profil">
		<div class="txt2Profil"> Artistes préférés: </div>
		<ul>
			<li class="txt3Profil">Nom de l'artiste 1 :</li>
			<li class="txt3Profil">Nom de l'artiste 2:</li>
			<li class="txt3Profil">Nom de l'artiste 3:</li>
		</ul>
	</div>

	<div class="container4Profil">
		<div class="txt2Profil"> Mes genres musicaux:</div>
		<ul>
			<li class="txt3Profil">Genre 1:</li>
			<li class="txt3Profil">Genre 2:</li>
			<li class="txt3Profil">Genre 3:</li>
		</ul>
	</div>

</div>