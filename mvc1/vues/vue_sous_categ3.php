
<head>
<link rel="stylesheet" href="ressources/style_forum.css" type="text/css" media="screen" />

	<meta charset="utf-8" />
	<title> SaveUrShow/Forum/Aide,Bugs du site </title>
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
	<table class= "tableforum">
			<thead>
				<tr class= "categforum1">
					<th> GROUPES/CONCERTS </th>
					<th> NOMBRE MESSAGES </th>
					<th> DERNIER MESSAGE </th>
				</tr>		
			</thead>

			<tbody>
				<tr>
					<td class="cellule"> <a href= "#" style="text-decoration:none"><div class="rubrique1"> <?php $reponse = $bdd->query('SELECT sous_categorie_forum  FROM sous_categorie_forum WHERE categorie_forum_ID =3 ORDER BY ID DESC ');

while ($donnees = $reponse->fetch())
{
	 echo $donnees['sous_categorie_forum'] . '<br />';
}

$reponse->closeCursor();
?>
</div></a></br>
									</td>
					<td class="cellule">  </td>
					<td class="cellule">  </a></td>
				</tr>
				<tr>
					<td class="cellule"><a href="#"  style="text-decoration:none"><div class="rubrique2"></div></a></br>
									
					<td class="cellule"> </td>
					<td class="cellule"> <a href= "#"> </a>
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