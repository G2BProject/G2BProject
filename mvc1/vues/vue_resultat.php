<?php
	if($type_recherche== '1'){
		foreach ($reqRecherche as $nom_artiste) {
			
				echo '<p class="standard"> <a href="?page=artiste&artiste='.$nom_artiste['nom_artiste'].'"> artiste : '.$nom_artiste['nom_artiste'].'</a><br /></p>';
			}
	}elseif ($type_recherche=='2'){

		foreach ($reqRecherche as $nom_du_concert) {
				echo '<p class="standard"> <a href=""> concert : '.$nom_du_concert['nom_du_concert'].'</a><br /></p>';
			}
	}else{

		foreach ($reqRecherche as $nom_de_la_salle) {
				echo '<p class="standard"> <a href=""> salle : '.$nom_de_la_salle['nom_de_la_salle'].'</a><br /></p>';
			}
	}

?>