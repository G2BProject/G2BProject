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
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> Date : </a> <?php echo $info['date_du_concert'].' à '.$info['heure_du_concert']; ?></div> </li>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> Lieu : </a> <?php echo $info['nom_de_la_salle'] ; ?></div> </li>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> Où réserver </a>: Liens vers un site vendant des places </div> </li>
				<li class="caractconcert"> <div class="txt2concert" href="#"> <a class="styleconcert"> Nombre de places : </a> <?php echo $info['nombre_de_place'] ; ?></div> </li>
			</ul>

			<div class="locconcert"> </div>
			<div class="localiserconcert"> Localiser le concert : </div>
		</div>
	</div>

	<div class="container2concert">
		<div> <a href="#"> <img class="barreconcert"/> </a> </div>
		<div> <a href="#"> <img class="listeconcert"/> </a> </div>
		<div class="mailconcert"> Recevoir l'actualité de l'artiste par mail </div>
	</div>

	<div class="container3concert">
		<div> <a class="txt3concert" href="#"> Description du concert </a> </div>
		<div> <a class="txtbioconcert" href="#"> Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla </a> </div>
		<div> <a class="txtbioconcert" href="#"> Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla Blabla </a> </div>
	</div>

	<div class="container4concert">
		
		<div> <a href="#"> <img class="userconcert"/> </a> </div>
		<div> <a class="txt4concert" href="#"> Nom de l'utilisateur: </a> </div>
		<div> <a class="txt4concert" href="#"> Date: </a></div>
		<div> <a class="txt4concert" href="#"> Laisser un commentaire : </a> </div>
		
		<div class="formulaireconcert">
		<form method="post" action="traitement.php">
				<p> <label class=""> </label>
				<textarea name="post" rows ="5" cols="40" id="postconcert"> </textarea>
				</p>
				<div> <a class="txt5concert" href="#"> Publier </a> </div>
		</form>
		</div>
	</div>

	<div class="container5concert">

		<ul>
			<div> <a class="txt6concert" href="#"> Messages postés sur ce concert </a> </div>
		</ul>
	
		<div class="container6concert">
			
			<div> <a href="#"> <img class="user2concert" /> </a> </div>
			<div> <a class="txt7concert" href="#"> Bidule1 </a> </div>
			<div> <a class="txt8concert" href="#"> Date du post </a> </div>
			<div> <a class="txt8concert" href="#"> Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post </a> </div>
			</br>
			<div> <a href="#"> <img class="user2concert" /> </a> </div>
			<div> <a class="txt7concert" href="#"> Bidule2 </a> </div>
			<div> <a class="txt8concert" href="#"> Date du post </a> </div>
			<div> <a class="txt8concert" href="#"> Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post Post </a> </div>
		</div>
	</div>
</div>