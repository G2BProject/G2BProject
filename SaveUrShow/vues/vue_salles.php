<?php
	if(isset($_SESSION['pseudo']) and empty($reqSallesDep)){
		echo'<div class="listDep"><p> '.$SALLES.' : '.$_SESSION['departement'].'<br /><br /></p>';
		echo'
			<p > '.$_SALLES_DEP.': </p>
			<form action="index.php?page=listeSalles" method="post">
			<p><label >'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> $TXT_EX</p>
			<p><input type="submit" value="'.$_VOIR_SALLE.'"></p>
       		</form>
       		</div>
		';
		foreach ($reqSallesDep as $salle){
			echo'
			<div class="conteneur"> <img class="gauche" alt="Concert" width="200" height="200" src="'.$salle['image_salle'].'" />
			  <h1>'.$NOM_SALLE.' : '.$salle['nom_de_la_salle'].'</h1> 
			  <p>'.$ADRESSE.' : '.$salle['adresse_salle'].'</p>
			  <p>'.$NUM.' : '.$salle['numero_de_telephone'].'</p>
			  </div>';
		}
	}else{
		echo'<div class="listDep">
			<p >'.$_SALLES_DEP.' : </p>
			<form action="index.php?page=listeSalles" method="post">
				<p><label>'.$DEPARTEMENT.' :</label><input type="text" name="departement" id="departement"/> '.$TXT_EX.'</p>
				<p><input type="submit" value="'.$_VOIR_SALLE.'"></p>
       		</form>
       		</div>
		';
		if(!empty($reqSallesDep)){
			foreach ($reqSallesDep as $salle){
				echo'
				<div class="conteneur"> <img class="gauche" alt="Salles" width="200" height="200" src="'.$salle['image_salle'].'" />
				<h1>'.$NOM_SALLE.' : '.$salle['nom_de_la_salle'].'</h1>
				<p>'.$ADRESSE.' : '.$salle['adresse_salle'].'</p>
				<p>'.$NUM.': '.$salle['numero_de_telephone'].'</p>
				</div>';
			}
		}
	}
?>