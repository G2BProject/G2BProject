<div class="formulaire">
<form action="index.php?page=ajoutSalle" method="post" enctype="multipart/form-data">

<p><label class="standard"><?php echo $NOM_SALLE ?>:</label><input type="text" name="nom_de_la_salle" id="nom_de_la_salle"/></p>
<p><label class="standard"><?php echo $ADRESSE ?> :</label><input type="text" name="adresse_salle" id="adresse_salle"/></p>
<p><label class="standard"><?php echo $DEPARTEMENT ?> :</label><input type="text" name="departement" id="departement"/> <?php echo $TXT_EX ?></p>
<p><label class="standard"></span><?php echo $DESCRIPTION ?> :</label><input type="text" name="description_salle" id="description_salle"/></p>
<p><label class="standard"></span><?php echo $NUM ?> :</label><input type="text" name="numero_de_telephone" id="numero_de_telephone"/></p>
<p><label class="standard"><?php echo $PLACE ?> :</label><input type="text" name="nombre_de_place" id="nombre_de_place"/></p>
<p><label for="image_salle" class="standard"><?php echo $IMAGE ?> (PNG, JPG ou JPEG, 1 Mo max.) :</label><input type="file" name="image_salle" id="image_salle"/></p>
		<p><input type="hidden" name="maxFileSize" value="1000000" /></p>
<p class="standard"><input type="submit" value="<?php echo $AJOUT_SALLE ?>"></p>
</form>
</div>