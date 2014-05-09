<!DOCTYPE html>
<html>
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


<nav>
				

				<a href="?page=discussion" class="boutonforum"  style="text-decoration:none"><div class="discuss">Créer discussion</div></a>
		<table class= "tableforum">
			<thead>
				<tr class= "categforum1">
					<th> A PROPOS DU SITE... </th>
					<th> SUJETS/MESSAGES </th>
					<th> DERNIER MESSAGE </th>
				</tr>		
			</thead>

			<tbody>
				<tr>
					<td class="cellule"><a href="#" style="text-decoration:none"><div class="rubrique1">Aide,Bugs du site</div></a></br>
									<div class="descriptif">Actualités du site, aide et questions diverses,suggestions...</br>
									Posez toutes vos questions en cas de problèmes, et faites nous part de vos remarques,souhaits d'amélioraton,bugs</div></td>
					<td class="cellule"> 12/120 </td>
					<td class="cellule"> Le 14/02/14 à 17h48 par <a href= "#"><?php $nom_du_visiteur = "saveurshowfan" ; echo $nom_du_visiteur ?></a></td>
				</tr>
				<tr>
					<td class="cellule"><a href="#"  style="text-decoration:none"><div class="rubrique2">Avis et Suggestions</div></a></br>
									<div class="descriptif">Vous pouvez nous faire part de vos avis afin d'améliorer le site</div></td>
					<td class="cellule"> 19/186 </td>
					<td class="cellule"> Le 15/03/14 à 9h10 par <a href= "#"> justintimber</a>
				</tr>
			</tbody>
		</table>
		<table class= "tableforum2">
			<thead>
				<tr class= "categforum2">
					<th> DISCUSSIONS </th>
					<th> SUJETS/MESSAGES </th>
					<th> DERNIER MESSAGE </th>
				</tr>		
			</thead>

			<tbody>
				<tr>
					<td class="cellule"><a href="#" style="text-decoration:none"><div class="rubrique3">Groupes/Artistes</div></a></br>
									<div class="descriptif">Venez discuter de vos groupes/artistes préférées</div></td>
									
					<td class="cellule"> 14/160 </td>
					<td class="cellule"> Le 14/03/14 à 18h00 par <a href= "#"><?php $nom_du_visiteur = "saveurshowfan2" ; echo $nom_du_visiteur ?></a>
				</tr>
				<tr>
					<td class="cellule"><a href="#"  style="text-decoration:none"><div class="rubrique4">Concerts</div></a></br>
									<div class="descriptif">Discuter des prochaines dates de concerts</div></td>
					<td class="cellule"> 19/106 </td>
					<td class="cellule"> Le 15/03/14 à 9h10 par <a href= "#"> justinbib</a></td>
				</tr>
			</tbody>
		</table>



</nav>


<footer> 
	

	<div id ="footer"> 
		
			
				<a href="#" class="boutonforum"  style="text-decoration:none"><div class="faqcontact">FAQ</div></a></li>
				<a href="#" class= "boutonforum"  style="text-decoration:none"><div class="faqcontact">Contacts</div></a></li>
			
		
	</div>

</footer>
</body>
</html>	 