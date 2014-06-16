
<head>
<link rel="stylesheet" href="ressources/style_forum.css" type="text/css" media="screen" />

	<meta charset="utf-8" />
	<title> SaveUrShow/Forum </title>
</head>


<body>
	

<header> 
	
	<form id="search" method="post">
	<div class="btn-left-loupe"></div>
	<input class="search_data" name="saisie" type="text" placeholder="Recherche..." required />
	<input class="btn-right-fleche" name="go" type="submit"  value="" />
	</form>
					
	<a href= "?page=accueil"> <img src=ressources/image/Titre.png alt= "nom logo" /></a>

</header>

<body>
<div class= "formulairediscuss">
	<form action="index.php?page=discussion" method="post">
				
				<p><span class="standard">Catégories :</span>
					<select name="categorie_forum_ID">
						<option value="1">Aide,Bugs du site</option>
						<option value="2">Avis et Suggestions</option>
						<option value="3">Groupes/Artistes</option>
						<option value="4">Concerts</option>
					</select>
	<p><label for="sous_categorie_forum" class="sous_categorie_forum" >Sujet :</label><input type="text" name="sous_categorie_forum" id="sous_categorie_forum" rows="5" cols="30"/></p>
	<p class="standard"><input type="submit" value="Valider"></p>
       			</form>


			</div>

<footer> 
	

	<div class="footer"> 
		
			
				<a href="#" class="boutonforum"  style="text-decoration:none"><div class="faqcontact">FAQ</div></a></li>
				<a href="index.php?page=contact" class= "boutonforum"  style="text-decoration:none"><div class="faqcontact">Contacts</div></a></li>
			
		
	</div>

</footer>
</body>