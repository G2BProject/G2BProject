﻿<?php
	if(isset($_SESSION['pseudo']) and empty($reqSallesDep)){
		echo'<div class="listDep"><p> '.$SALLES.' : '.$_SESSION['departement'].'<br /><br /></p>';
		echo'
			<p > '.$_SALLES_DEP.': </p>
			<form action="index.php?page=listeSalles" method="post">
				<p><label >'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> $TXT_EX</p>
				<p ><input type="submit" value="'.$_VOIR_SALLE.'"></p>
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
			<p >'.$_SALLES_DEP.' : </p>
			<form action="index.php?page=listeSalles" method="post">
				<p><label>'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> '.$TXT_EX.'</p>
				<p><input type="submit" value="'.$_VOIR_SALLE.'"></p>
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