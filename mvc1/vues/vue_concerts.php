<?php
	if(isset($_SESSION['pseudo']) and empty($reqConcertDep)){
		echo'<div class="listDep"><p> Voici les concerts de votre département : '.$_SESSION['departement'].'<br /><br /></p>';
		echo'
			<p >Si vous voulez voir les concerts d\'un autre departement, rentrez le ici : </p>
			<form action="index.php?page=listeConcerts" method="post">
				<p><label >Departement :</label><input type="text" name="departement" id="departement"/> ex: pour Paris tapez:75</p>
				<p ><input type="submit" value="Voir les concerts de ce departement"></p>
       		</form>
       		</div>
		';
		foreach ($reqConcertDep as $concert){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
			  <h1>Nom du concert : '.$concert['nom_du_concert'].'</h1> <p> Date et heure : '.$concert['date_du_concert'].' à '.$concert['heure_du_concert'].' </p></div>';
		}
	}else{
		echo'<div class="listDep">
			<p >Si vous voulez voir les concerts d\'un departement précis, rentrez le ici : </p>
			<form action="index.php?page=listeConcerts" method="post">
				<p><label>Departement :</label><input type="text" name="departement" id="departement"/> ex: pour Paris tapez:75</p>
				<p><input type="submit" value="Voir les concerts de ce departement"></p>
       		</form>
       		</div>
		';
		if(!empty($reqConcertDep)){
			foreach ($reqConcertDep as $concert){
				echo'
				<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
				<h1>Nom du concert : '.$concert['nom_du_concert'].'</h1> <p> Date et heure : '.$concert['date_du_concert'].' à '.$concert['heure_du_concert'].' </p><p> Salle : '.$concert['nom_de_la_salle'].'</div>';
			}
		}
	}
?>