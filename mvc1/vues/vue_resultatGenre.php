<?php
	
	if ($genre == 'pop'){
		echo '<p class="standard"> '.$POP.'';
	}
	elseif ($genre == 'classique') {
		echo '<p class="standard"> '.$CLASSIC.'';
	}
	elseif ($genre == 'worldMusic') {
		echo '<p class="standard"> '.$_MUSIQUE_MONDE.'';
	}
	elseif ($genre == 'metal') {
		echo '<p class="standard"> '.$METAL.'';
	}
	elseif ($genre == 'reggae') {
		echo '<p class="standard"> '.$REGGAE.'';
	}
	elseif ($genre == 'variete') {
		echo '<p class="standard"> '.$VARIETE.'';
	}
	elseif ($genre == 'alternatif') {
		echo '<p class="standard"> '.$ALTERNATIF.'';
	}
	elseif ($genre == 'electro') {
		echo '<p class="standard"> '.$ELECT.'';
	}
	elseif ($genre == 'rb') {
		echo '<p class="standard"> '.$_R_B.'';
	}
	elseif ($genre == 'jazz') {
		echo '<p class="standard"> '.$JAZZ.'';
	}
	elseif ($genre == 'rap') {
		echo '<p class="standard"> '.$RAP.'';
	}
	elseif ($genre == 'rock') {
		echo '<p class="standard"> '.$ROCK.'';
	}
	
	foreach ($reqGenre as $nom_artiste) {
				echo '<p class="standard"> <a href="?page=artiste&artiste='.$nom_artiste['nom_artiste'].'"> '.$TXT_ARTISTE.' : '.$nom_artiste['nom_artiste'].'</a><br /></p>';
			}


 ?>