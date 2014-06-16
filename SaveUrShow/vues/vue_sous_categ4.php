
<head>
<link rel="stylesheet" href="ressources/style_forum.css" type="text/css" media="screen" />

	<meta charset="utf-8" />
	<title> SaveUrShow/Forum/Aide,Bugs du site </title>
</head>


<body>
	

<header> 

					
	<a href= "?page=accueil"> <img src=ressources/image/Titre.png alt= "nom logo" /></a>

</header>
<nav>
	<table class= "tableforum">
			<thead>
				<tr class= "categforum1">
					<th><?php echo $MAJ_CONCERT ?> </th>
					<th> <?php echo $NUM_MESSAGE?></th>
				</tr>		
			</thead>

			<tbody>
				<tr>
					<td class="cellule"> <a href= "#" style="text-decoration:none"><div class="rubrique1"> <?php $reponse = $bdd->query('SELECT sous_categorie_forum  FROM sous_categorie_forum WHERE categorie_forum_ID =4 ORDER BY ID DESC');

while ($donnees = $reponse->fetch())
{
	 echo '<a href= "?page=messageforum&post='.$donnees['sous_categorie_forum'].'" style="text-decoration:none">'.$donnees['sous_categorie_forum'] . '<br /></div></a>';
}

$reponse->closeCursor();
?>
</div></a></br>
									</td>
					<td class="cellule"></a>
 </td>
					
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