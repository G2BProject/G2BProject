<html>
	<form method="post" action="index.php?page=backOffice" enctype="multipart/form-data">
		<div class="formulaire">
		<div class="details"><?php echo $ADMIN ?></div></br>
		<div class="details"><?php echo $REMPLIR ?></div>
		<div class="details"><?php echo $VIDE ?></div>

		<p>
			<label for="suppMembre" class="standard"><?php echo $SUP_MEMBRE ?> :</label><input name="suppMembre" type="text" id="suppMembre" /><br />
			<label for="suppArtiste" class="standard"><?php echo $SUP_ARTISTE ?> :</label><input type="text" name="suppArtiste" id="suppArtiste" /><br />
			<label for="suppConcert" class="standard"><?php echo $SUP_CONCERT ?> :</label><input type="text" name="suppConcert" id="suppConcert" />
		</p>
		<p>
		<div class="details"><?php echo $CHOIX_NEWS ?></div><br />
		<label for="actu" class="standard"><?php echo $CHANGER_NEW ?> :</label><input type="text" name="actu" id="actu" />
		<p><label for="photo_actu" class="standard"><?php echo $IMAGE_ACTU ?> (PNG, 1 Mo max.) :</label><input type="file" name="photo_actu" id="photo_actu"/></p>
		<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
		</p>
		<p>
			<div class="details"><?php echo $CHANGER_COEURS ?> </div><br />
			<label for="num1" class="standard"><?php echo $NUM_1 ?> :</label><input type="text" name="num1" id="num1" /><br />
			<label for="num2" class="standard"><?php echo $NUM_2 ?> :</label><input type="text" name="num2" id="num2" />
		</p>
				<p>
			<div class="details"><?php echo $CHANGER_TOP ?> </div><br />
			<label for="top1" class="standard"><?php echo $TOP_1 ?> :</label><input type="text" name="top1" id="top1" /><br />
			<label for="top2" class="standard"><?php echo $TOP_2 ?> :</label><input type="text" name="top2" id="top2" /><br />
			<label for="top3" class="standard"><?php echo $TOP_3 ?> :</label><input type="text" name="top3" id="top3" />
		</p>	
		<p class="details"><input type="submit" value="<?php echo $ACTU_DONNEES ?>" /></p>
</div> </form>
<div>
	<ul>
		<div class="details">Ci dessous les messages qui sont adressés à l'administration:</div>
	<?php  
foreach ($messages as $message) {
				
				echo '<li class="details">Nom: '.$message['nom'].'<br /></li>';
				echo '<li class="details">email: '.$message['email'].'<br /></li>';
				echo '<li class="details">objet du message: '.$message['objet'].'<br /></li>';
				echo '<li class="details">'.$message['message'].'<br /></li>';
				echo '<li class="details">'.$message['date'].'<br /></li><br /><br /><br />';
			}
	?>
	</ul>

</div>
</html>