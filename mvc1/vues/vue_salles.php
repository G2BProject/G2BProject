<?php
	if(isset($_SESSION['pseudo']) and empty($reqSallesDep)){
		echo'<div class="listDep"><p> Voici les salles de votre région : '.$_SESSION['departement'].'<br /><br /></p>';
		echo'
			<p >Si vous voulez voir les salles d\'un autre departement, rentrez le ici : </p>
			<form action="index.php?page=listeSalles" method="post">
				<p><label >Departement :</label><input type="text" name="departement" id="departement"/> ex: pour Paris tapez:75</p>
				<p ><input type="submit" value="Voir les salles de ce departement"></p>
       		</form>
       		</div>
		';
		foreach ($reqSallesDep as $salle){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
			  <h1>nom de la salle: '.$salle['nom_de_la_salle'].'</h1> <p> adresse: '.$salle['adresse_salle'].'&nbsp; numero: '.$salle['numero_de_telephone'].'  </p><h2> Concert à venir: <p><a href="Cascadeur.html">Cascadeur,</a> <a href="Fauve.html">Fauve,</a> <a href="La Maison Tellier.html">La Maison Tellier</a></p> </h2>

			</div>
			';
		}
	}else{
		echo'<div class="listDep">
			<p >Si vous voulez voir les salles d\'un departement précis, rentrez le ici : </p>
			<form action="index.php?page=listeSalles" method="post">
				<p><label>Departement :</label><input type="text" name="departement" id="departement"/> ex: pour Paris tapez:75</p>
				<p><input type="submit" value="Voir les salles de ce departement"></p>
       		</form>
       		</div>
		';
		if(!empty($reqSallesDepP)){
			foreach ($reqSallesDepP as $salle){
				echo'
				<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
				<h1>nom de la salle: '.$salle['nom_de_la_salle'].'</h1> <p> adresse: '.$salle['adresse_salle'].'&nbsp; numero: '.$salle['numero_de_telephone'].'  </p><h2> Concert à venir: <p><a href="Cascadeur.html">Cascadeur,</a> <a href="Fauve.html">Fauve,</a> <a href="La Maison Tellier.html">La Maison Tellier</a></p> </h2>
				</div>
			';
			}
		}
	}
?>