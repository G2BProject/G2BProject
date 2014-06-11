<?php

echo "<div class='resultat'>";
echo "<ul>";
	if($type_recherche== '1'){
		if($reqRecherche!='empty'){
			echo "<br/>";
		echo "<p class='result'> Artistes </p>";
		foreach ($reqRecherche as $nom_artiste) {
				
				echo '<li> <a href="?page=artiste&artiste='.$nom_artiste['nom_artiste'].'"> '.$nom_artiste['nom_artiste'].' </a><br /></li>';
			echo "</br>";
			}
		}
	}elseif ($type_recherche=='2'){
		echo "<br/>";
		if($reqRecherche!='empty'){
				echo "<p class='result'> Concerts </p>";
		foreach ($reqRecherche as $nom_du_concert) {
				echo '<li> <a href=""> '.$nom_du_concert['nom_du_concert'].'</a><br /></li>';
			}
		}
	}elseif ($type_recherche=='3'){
		echo "<br/>";
			if($reqRecherche!='empty'){
				echo "<p class='result'> Salles </p>";
		foreach ($reqRecherche as $nom_de_la_salle) {
				echo '<li> <a href="">'.$nom_de_la_salle['nom_de_la_salle'].'</a><br /></li>';
			}
		}
	}
echo "</ul>";
echo "<br/>";
echo " </div> "

?>