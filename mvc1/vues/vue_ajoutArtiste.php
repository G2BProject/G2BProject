<div class="formulaire">
	<form action="index.php?page=ajoutArtiste" method="post">
		<p><label for="nom_artiste" class="standard">Nom :</label><input type="text" name="nom_artiste" id="nom artiste"/></p>
		<p><label for="bio" class="standard">Description :</label><input type="text" name="bio" id="bio"/></p>
		<p><label for="avatarArtiste" class="standard">Image (PNG ou JPEG, 1 Mo max.) :</label><input type="file" name="image" id="image"/></p>
		<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
		<p class="standard"><input type="submit" value="Ajouter l'artiste"></p>
	</form>
</div>