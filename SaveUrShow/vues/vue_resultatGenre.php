<?php
	echo '<p class="standard">'.$genre.'</p>';
	foreach ($reqGenre as $nom_artiste) {
				echo '<p class="standard"> <a href="?page=artiste&artiste='.$nom_artiste['nom_artiste'].'"> artiste : '.$nom_artiste['nom_artiste'].'</a><br /></p>';
			}


 ?>