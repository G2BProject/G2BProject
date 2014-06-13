<div class="formulaire">
	<form action="index.php?page=ajoutArtiste" method="post" enctype="multipart/form-data">
		<p><label for="nom_artiste" class="standard"><?php echo $NOM_ARTISTE ?> : </label><input type="text" name="nom_artiste" id="nom artiste"/></p>
		<p><label for="bio_artiste" class="standard"><?php echo $DESCRIPTION ?> : </label><input type="text" name="bio_artiste" id="bio_artiste"/></p>
		<p><span class="standard"> <?php echo $GENRE ?> :</span>
		<select name="genre">
						<option value="01"><?php echo $POP ?></option>
						<option value="02"><?php echo $CLASSIC ?></option>
						<option value="03"><?php echo $_MUSIQUE_MONDE ?></option>
						<option value="04"><?php echo $METAL ?></option>
						<option value="05"><?php echo $REGGAE ?></option>
						<option value="06"><?php echo $VARIETE ?></option>
						<option value="07"><?php echo $ALTERNATIF ?></option>
						<option value="08"><?php echo $ELECT ?></option>
						<option value="09"><?php echo $_R_B ?></option>
						<option value="10"><?php echo $JAZZ ?></option>
						<option value="11"><?php echo $RAP ?></option>
						<option value="12"><?php echo $ROCK ?></option>
					</select>
					</p>
		<p><label for="image_artiste" class="standard"><?php echo $IMAGE ?> (PNG, JPG ou JPEG, 1 Mo max.) :</label><input type="file" name="image_artiste" id="image_artiste"/></p>
		<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
		<p class="standard"><input type="submit" value="<?php echo $AJOUT_ARTISTE ?>"></p>
	</form>
</div>