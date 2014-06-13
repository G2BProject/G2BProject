<div class="Profil">

		<div class="container1Profil">
		<br />
		<br g/>
		<img class="photo_profil" src=<?php echo $info['image_concert']; ?>>
		<div class="pseudo"><?php echo $NOM_CONCERT ?> : <?php echo $info['nom_du_concert']; ?></div>
		<ul>
			<li class="txt1Profil"><?php echo $NOM_SALLE ?> : <?php echo $info['nom_de_la_salle']; ?></li>
			<li class="txt1Profil"><?php echo $PLACE ?> : <?php echo $info['nombre_de_place']; ?></li>
			<li class="txt1Profil"><?php echo $NUM ?> : <?php echo $info['numero_de_telephone']; ?></li>
		</ul>
	</div>

	<div class="container2concert">
		<div> <a href="#"> <img class="barreconcert"/> </a> </div>
		<div> <a href="#"> <img class="listeconcert"/> </a> </div>
		<div class="mailconcert"> <?php echo $RECEVOIR_ACTU ?><?php echo $info['nom_du_concert'] ; ?><?php echo $PAR_MAIL?> </div>
	</div>

	<div class="container3concert">
		<div> <a class="txt3concert" href="#"><?php echo $DESCRIPTION_CONCERT ?> </a> </div>
		<div> <a class="txtbioconcert" href="#"> Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla </a> </div>
		<div> <a class="txtbioconcert" href="#"> Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla </a> </div>
	</div>

	<div class="container4concert">
		
		<div> <a href="#"> <img class="userconcert"/> </a> </div>
		<div> <a class="txt4concert" href="#"> <?php echo $TXT_NOM_UTILISATEUR ?> </a> </div>
		<div> <a class="txt4concert" href="#"><?php echo $DATE ?> : </a></div>
		<div> <a class="txt4concert" href="#"> <?php echo $COMM ?> : </a> </div>
		
		<div class="formulaireconcert">
		<form method="post" action="traitement.php">
				<p> <label class=""> </label>
				<textarea name="post" rows ="5" cols="40" id="postconcert"> </textarea>
				</p>
				<div> <a class="txt5concert" href="#"> <?php echo $PUBLIER ?> </a> </div>
		</form>
		</div>
	</div>

</div>