<div class="formulaire">
<form action="index.php?page=ajoutSalle" method="post" enctype="multipart/form-data">

<p><label class="standard">Nom de la salle:</label><input type="text" name="nom_salle" id="nom_salle"/></p>
<p><label class="standard">Adresse :</label><input type="text" name="adresse_salle" id="adresse_salle"/></p>
<p><label class="standard">Departement :</label><input type="text" name="departement" id="departement"/> ex: pour Paris tapez:75</p>
<p><label class="standard"></span>Description :</label><input type="text" name="description_salle" id="description_salle"/></p>
<p><label class="standard"></span>Numero de téléphone :</label><input type="text" name="telephone" id="telephone"/></p>
<p><label class="standard">Nombre de places :</label><input type="text" name="capacite" id="capacite"/></p>
<p><label for="image_salle" class="standard">Image (PNG, JPG ou JPEG, 1 Mo max.) :</label><input type="file" name="image_salle" id="image_salle"/></p>
		<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
<p class="standard"><input type="submit" value="Ajouter une salle"></p>
</form>
</div>