<html>
	<form method="post" action="index.php?page=backOffice">
		<div class="formulaire">
		<div class="details">Administation du site</div></br>
		<div class="details">Remplissez les champs de texte pour faire les modifications voulues</div>
		<div class="details">Laissez le champ vide si vous n'y souhaiter pas de modifications</div>

		<p>
			<label for="suppMembre" class="standard">Supprimer le membre suivant :</label><input name="suppMembre" type="text" id="suppMembre" /><br />
			<label for="suppArtiste" class="standard">Supprimer l'artiste suivant :</label><input type="text" name="suppArtiste" id="suppArtiste" /><br />
			<label for="suppConcert" class="standard">Supprimer le concert suivant :</label><input type="text" name="suppConcert" id="suppConcert" />
		</p>
		
		<p class="details"><input type="submit" value="Actualisation des données" /></p>
</div> </form>
</html>