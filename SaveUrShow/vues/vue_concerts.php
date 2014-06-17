<?php
	if(isset($_SESSION['pseudo']) and empty($reqConcertDep)){
		echo'<div class="listDep"><p> '.$CONCERT.' : '.$_SESSION['departement'].' <br /><br /></p>';
		echo'
			<p >'.$_CONCERT_DEP.' :<br /><br /></p>
			<form action="index.php?page=listeConcerts" method="post">
				<p><label >'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> '.$TXT_EX.'</p>
				<p ><input type="submit" value="'.$_VOIR_CONCERT.'"></p>
       		</form>
       		</div>
		';
		foreach ($reqConcertDep as $concert){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="'.$concert['image_concert'].'" />
			  <h1> '.$NOM_CONCERT.' : <a href="?page=concert&concert='.$concert['nom_du_concert'].'">'.$concert['nom_du_concert'].'</a></h1> 
			  <p> '.$DATE.''.$ET.''.$HEURE_CONCERT.' : '.$concert['date_du_concert'].' à '.$concert['heure_du_concert'].'</p>
			  <p> '.$NOM_SALLE.' : '.$concert['nom_de_la_salle'].'</p>
			  <p>'.$NOM_ARTISTE.' : '.$concert['nom_artiste'].'</p>
			  </div>';
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
				<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="'.$concert['image_concert'].'" />
				<h1> '.$NOM_CONCERT.' : <a href="?page=concert&concert='.$concert['nom_du_concert'].'">'.$concert['nom_du_concert'].'</a></h1>
				<p> '.$DATE.''.$ET.''.$HEURE_CONCERT.' : '.$concert['date_du_concert'].' à '.$concert['heure_du_concert'].' </p>
				<p> '.$NOM_SALLE.' : '.$concert['nom_de_la_salle'].'</p>
				<p>'.$NOM_ARTISTE.' : '.$concert['nom_artiste'].'</p>
				</div>';
			}
		}
	}
?>