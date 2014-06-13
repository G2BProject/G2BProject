<a class="txt3_gestion_profil" href="#">Modifier mon profil</a><br></br>

<div class="container1gestionprofil">
<div><a class="txt0_gestion_profil" href="#">Modifier la photo de profil</a></div>
</div>

<div class="container2gestionprofil">
<form method="post" action="modele_gestionprofil.php">
<p><label class="txt11_gestion_profil">Modifier le Pseudo: </label><input class="input" type="text" name="pseudo"/></p>
</div>

<div class="container2gestionprofil">
<form method="post" action="modele_gestionprofil.php">
<p><label class="txt11_gestion_profil">Modifier l'adresse: </label><input class="input" type="text" name="adresse"/></p>
</div>

<div class="container2gestionprofil">
<p><label class="txt11_gestion_profil">Modifier le mail:</label><input class="input" type="text" name="adresse_mail"/></p>

<div class="container2gestionprofil">
<p><label class="txtconcerts_gestion_profil">Participer à un concert</label><textarea name="modif_concerts_à_venir" rows ="1" cols="30" id="txtgestionprofil"></textarea> </p>
</div>

<div class="container2gestionprofil">
<p><label class="txtartistes_gestion_profil">Suivre un artiste</label><textarea name="ajout_concerts_à_venir" rows ="1" cols="30" id="txtgestionprofil"></textarea></p>
</div>
<div class="container2gestionprofil">
<p><label class="txtgenre_gestion_profil">Ne plus suivre :</label><textarea name="ajout_concerts_à_venir" rows ="1" cols="30" id="txtgestionprofil"></textarea></p>
<br></br>
<div class="txt3_gestion_profil"><input type=submit value='enregistrer'><br></br></div>
</form>