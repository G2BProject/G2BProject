<?php
	if(isset($_SESSION['pseudo']) and empty($reqConcertDep)){
		echo'<div class="listDep"><p> '.$CONCERT.' : '.$_SESSION['departement'].' <br /><br /></p>';
		echo'
			<br />
			<br /> 
			<p >'.$_CONCERT_DEP.' :<br /><br /></p>
			<form action="index.php?page=listeConcerts" method="post">
				<p><label >'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> '.$TXT_EX.'</p>
				<p ><input type="submit" value="'.$_VOIR_CONCERT.'"></p>
       		</form>
       		</div>
		';
		foreach ($reqConcertDep as $concert){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="ressources/image/Salle1.png" />
			  <h1>Nom du concert : '.$concert['nom_du_concert'].'</h1> <p> Date et heure : '.$concert['date_du_concert'].' à '.$concert['heure_du_concert'].' </p></div>';
		}
	}else{
		echo'<div class="listDep"><br />
			<p >'.$_CONCERT_DEP.' </p>
			<form action="index.php?page=listeConcerts" method="post">
				<p><label>'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> '.$TXT_EX.'</p>
				<p><input type="submit" value="'.$_VOIR_CONCERT.'"></p>
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