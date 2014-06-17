<?php
	
	if ($genre == 'pop'){
		echo '<p class="standard" style="color:#66CCCC;"> '.$POP.'';
	}
	elseif ($genre == 'classique') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$CLASSIC.'';
	}
	elseif ($genre == 'worldMusic') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$_MUSIQUE_MONDE.'';
	}
	elseif ($genre == 'metal') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$METAL.'';
	}
	elseif ($genre == 'reggae') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$REGGAE.'';
	}
	elseif ($genre == 'variete') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$VARIETE.'';
	}
	elseif ($genre == 'alternatif') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$ALTERNATIF.'';
	}
	elseif ($genre == 'electro') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$ELECT.'';
	}
	elseif ($genre == 'rb') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$_R_B.'';
	}
	elseif ($genre == 'jazz') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$JAZZ.'';
	}
	elseif ($genre == 'rap') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$RAP.'';
	}
	elseif ($genre == 'rock') {
		echo '<p class="standard" style="color:#66CCCC;"> '.$ROCK.'';
	}
	
	foreach ($reqGenre as $nom_artiste) {
				echo '<p class="standard"> <a href="?page=artiste&artiste='.$nom_artiste['nom_artiste'].'"> '.$TXT_ARTISTE.' : '.$nom_artiste['nom_artiste'].'</a><br /></p>';
			}


 ?>