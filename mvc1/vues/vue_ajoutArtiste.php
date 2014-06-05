<div class="formulaire">
	<form action="index.php?page=ajoutArtiste" method="post" enctype="multipart/form-data">
		<p><label for="nom_artiste" class="standard">Nom :</label><input type="text" name="nom_artiste" id="nom artiste"/></p>
		<p><label for="bio_artiste" class="standard">Description :</label><input type="text" name="bio_artiste" id="bio_artiste"/></p>
		<p><span class="standard">Genre :</span>
		<select name="genre">
						<option value="01">pop</option>
						<option value="02">classique</option>
						<option value="03">worldMusic</option>
						<option value="04">metal</option>
						<option value="05">reggae</option>
						<option value="06">variete</option>
						<option value="07">alternatif</option>
						<option value="08">electro</option>
						<option value="09">R&B</option>
						<option value="10">jazz</option>
						<option value="11">rap</option>
						<option value="12">rock</option>

					</select>
					</p>
		<p><label for="image_artiste" class="standard">Image (PNG, JPG ou JPEG, 1 Mo max.) :</label><input type="file" name="image_artiste" id="image_artiste"/></p>
		<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
		<p class="standard"><input type="submit" value="Ajouter l'artiste"></p>
	</form>
</div>