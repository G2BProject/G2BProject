<?php 
	function Search($mot_cle, $type_recherche){
		global $bdd;
		$req = $bdd->prepare('INSERT INTO recherche(mot_cle, type_recherche, date_recherche) VALUES(:mot_cle,:type_recherche, NOW())');
		$req -> execute(array(
			'mot_cle' => $mot_cle,
			'type_recherche' => $type_recherche,
		));
		
		$req1 = $bdd -> query('SELECT * FROM artiste WHERE nom_artiste LIKE \'%'.$mot_cle.'%\' ');

			while($donnee = $req1 -> fetch()){
				echo $donnee['nom_artiste'];
				?>
				<br/><?php
			}
		$req1 -> closeCursor();
		
	}
?>