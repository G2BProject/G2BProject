<html>
	<head>
        	<meta charset="utf-8" />
        	<link rel="stylesheet" href="style_inscription.css" />
        	<title>Connexion</title>
	</head>

	<?php include("menu.php"); ?>

	<nav>

	</nav>

	<body>
			<div class="formulaire">
			<form method="post" action="traitement.php">
				<p><label class="standard">Nom d'utilisateur :</label><input type="text" name="pseudo" id="pseudo"/></p>
				<p><label class="standard">Mot de passe :</label><input type="password" name="password" id="password"/></p>
				<p><a class="connecter" href="">Se connecter</a></p>
			</div>
	</body>
</html>