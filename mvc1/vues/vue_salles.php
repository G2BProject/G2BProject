<?php
	if(isset($_SESSION['pseudo'])){
		echo'<p > Voici les salles de votre région!<br /><br /><br /><br /></p>';
		foreach ($reqSallesDep as $salle){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
			  <h1>nom de la salle: '.$salle['nom_de_la_salle'].'</h1> <p> adresse: '.$salle['adresse_salle'].'&nbsp; numero: '.$salle['numero_de_telephone'].'  </p><h2> Concert à venir: <p><a href="Cascadeur.html">Cascadeur,</a> <a href="Fauve.html">Fauve,</a> <a href="La Maison Tellier.html">La Maison Tellier</a></p> </h2>

			</div>
			';
		}
	}else{
		foreach ($reqSalles as $salle){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
			  <h1>nom de la salle: '.$salle['nom_de_la_salle'].'</h1> <p> adresse: '.$salle['adresse_salle'].'&nbsp; numero: '.$salle['numero_de_telephone'].'  </p><h2> Concert à venir: <p><a href="Cascadeur.html">Cascadeur,</a> <a href="Fauve.html">Fauve,</a> <a href="La Maison Tellier.html">La Maison Tellier</a></p> </h2>

			</div>
			';
		}
}
?>