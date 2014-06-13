<div class="contenuConcert">
	
	<div class="container1concert">
		<div id="photoconcert">
			<img class = "photoprofil" src= <?php
			if(isset($info['image_concert'])){
				echo $info['image_concert'];
			}
			else{
				echo "ressources/avatars" ;
			} ?>
			<p class="txt1concert">
			<?php echo $info['nom_du_concert'] ; ?>
			</p>

			<ul>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> <?php echo $DATE ?> : </a> <?php echo $info['date_du_concert'].' à '.$info['heure_du_concert']; ?></div> </li>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> <?php echo $LIEU ?> : </a> <?php echo $info['nom_de_la_salle'] ; ?></div> </li>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> <?php echo $OU ?> : </a>: Liens vers un site vendant des places </div> </li>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> <?php echo $PLACE ?> : </a> <?php echo $info['nombre_de_place'] ; ?></div> </li>
			</ul>

			<div class="locconcert"> </div>
			<div class="localiserconcert"> <?php echo $LOCAL_CONCERT ?>: </div>
		</div>
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