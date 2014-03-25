<html>
	<head>
        	<meta charset="utf-8" />
        	<link rel="stylesheet" href="style_inscription.css" />
        	<title>Inscription</title>
	</head>

	<?php include("menu.php"); ?>

	<nav>
	
	</nav>

	<body>
		
		<p class="typeUtilisateur">Vous vous inscrivez en tant que : <span class="particulier">particulier</span>.</p>
			<div class="formulaire">
			<form method="post" action="traitement.php">
				<p><label class="standard"><span class="etoile">*</span>Nom d'utilisateur :</label><input type="text" name="pseudo" id="pseudo"/></p>
				<p><label class="standard"><span class="etoile">*</span>Mot de passe :</label><input type="password" name="password" id="password"/></p>
	
			</div>
	</body>
</html>
