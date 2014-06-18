<?php

echo "<div class='resultat'>";
echo "<ul>";
	if($type_recherche== '1'){
		if($reqRecherche!='empty'){
			echo "<br/>";
		echo "<p class='result' style='color:#66CCCC;' >".$TXT_ARTISTES."</p>";
		foreach ($reqRecherche as $nom_artiste) {
				
				echo '<li> <a href="?page=artiste&artiste='.$nom_artiste['nom_artiste'].'"> '.$nom_artiste['nom_artiste'].' </a><br /></li>';
			echo "</br>";
			}
		}
	}elseif ($type_recherche=='2'){
		echo "<br/>";
		if($reqRecherche!='empty'){
				echo "<p class='result' style='color:#66CCCC;'>".$TXT_CONCERTS."</p>";
		foreach ($reqRecherche as $concert) {
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="'.$concert['image_concert'].'" />
			  <h1> '.$NOM_CONCERT.' : <a href="?page=concert&concert='.$concert['nom_du_concert'].'">'.$concert['nom_du_concert'].'</a></h1> 
			  <p> '.$DATE.''.$ET.''.$HEURE_CONCERT.' : '.$concert['date_du_concert'].' à '.$concert['heure_du_concert'].'</p>
			  <p> '.$NOM_SALLE.' : '.$concert['nom_de_la_salle'].'</p>
			  <p>'.$NOM_ARTISTE.' : '.$concert['nom_artiste'].'</p>
			  </div>';
			}
		}
	}elseif ($type_recherche=='3'){
		echo "<br/>";
			if($reqRecherche!='empty'){
				echo "<p class='result' style='color:#66CCCC;'>".$TXT_SALLES."</p>";
		foreach ($reqRecherche as $salle) {
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="'.$salle['image_salle'].'" />
			  <h1>'.$NOM_SALLE.' : '.$salle['nom_de_la_salle'].'</h1> 
			  <p>'.$ADRESSE.' : '.$salle['adresse_salle'].'</p>
			  <p>'.$NUM.' : '.$salle['numero_de_telephone'].'</p>
			  </div>';
			}
		}
	}
echo "</ul>";
echo "<br/>";
echo " </div> "

?>