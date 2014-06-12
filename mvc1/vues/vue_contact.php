<div class="formulaire">
	<form action="index.php?page=contact" method="post">
		<div class="nous_contacter"> <?php echo $CONTACT ?> :</div>
		<p><label for="nom_prenom" class="standard"> <?php echo $NOM ?> : </label><input name="nom_prenom" type="text" id="nom_prenom" /></p>
		<p><label for="adresse_mail" class="standard"> <?php echo $TXT_MAIL ?> : </label><input type="text" name="adresse_mail" id="adresse_mail" /></p>
		<p><label for="objet" class="standard"> <?php echo $OBJET ?> : </label><input name="objet" type="text" id="objet" /></p>
		<p><label for="message" class="standard"> <?php echo $MESSAGE ?> : </label><textarea name="post" rows ="5" cols="40" id="postartiste"></textarea></p>
		<p class="details"><input type="submit" value="<?php echo $ENVOI ?>" /></p>
		</div>
</form>
</div> 