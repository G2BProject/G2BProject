

<head>
<link rel="stylesheet" href="ressources/style_forum.css" type="text/css" media="screen" />

	<meta charset="utf-8" />
	<title> SaveUrShow/Forum </title>
</head>


<body>
	

<header> 				
	<a href= "?page=accueil"> <img src=ressources/image/Titre.png alt= "nom logo" /></a>

</header>


<nav>
				<?php if (isset($_SESSION['pseudo'])){
echo '<a href="?page=discussion" class="boutonforum"  style="text-decoration:none"><div class="discuss">'.$CREER_DISCUSSION.'</div></a>';

				}else{
					echo '<a href="?page=connexion" style="color:white">'.$CONNECT.'!</a> ou  <a href="?page=inscription" style="color:white">'.$INSCRIRE.'! </a>';
				} ?>
					

				
		<table class= "tableforum">
			<thead>
				<tr class= "categforum1">
					<th> <?php echo $PROPOS ?> ... </th>
					<th> <?php echo $SUJET ?></th>
					
				</tr>		
			</thead>

			<tbody>
				<tr>
					<td class="cellule"><a href="?page=sous_categ1" style="text-decoration:none"><div class="rubrique1"><?php echo $AIDE ?></div></a></br>
									<div class="descriptif"><?php echo $ACTUALITE ?> ...</br>
									<?php echo $PBM ?> </div></td>
					<td class="cellule">  <?php $reponse = $bdd->query('SELECT COUNT(*) AS nbsujets  FROM sous_categorie_forum WHERE categorie_forum_ID=1 ');

$count = $reponse->fetch(PDO::FETCH_ASSOC);   
       
     echo $count['nbsujets'];   
?> </td>
				</tr>
				<tr>
					<td class="cellule"><a href="?page=sous_categ2"  style="text-decoration:none"><div class="rubrique2"><?php echo $AVIS ?></div></a></br>
									<div class="descriptif"><?php echo $PART_AVIS ?></div></td>
					<td class="cellule"> <?php $reponse = $bdd->query('SELECT COUNT(*) AS nbsujets  FROM sous_categorie_forum WHERE categorie_forum_ID=2 ');

$count = $reponse->fetch(PDO::FETCH_ASSOC);   
       
     echo $count['nbsujets'];   
?> 

</td>

				</tr>
			</tbody>
		</table>
		<table class= "tableforum2">
			<thead>
				<tr class= "categforum2">
					<th> <?php echo $DISCUSSION ?> </th>
					<th> <?php echo $SUJET ?> </th>
					
				</tr>		
			</thead>

			<tbody>
				<tr>
					<td class="cellule"><a href="?page=sous_categ3" style="text-decoration:none"><div class="rubrique3"> <?php echo $GROUPES ?></div></a></br>
									<div class="descriptif"><?php echo $DISCUTE_GROUPE ?></div></td>
									
					<td class="cellule">  <?php $reponse = $bdd->query('SELECT COUNT(*) AS nbsujets  FROM sous_categorie_forum WHERE categorie_forum_ID=3 ');

$count = $reponse->fetch(PDO::FETCH_ASSOC);   
       
     echo $count['nbsujets'];   
?> </td>
			
				</tr>
				<tr>
					<td class="cellule"><a href="?page=sous_categ4"  style="text-decoration:none"><div class="rubrique4"><?php echo $TXT_CONCERTS ?></div></a></br>
									<div class="descriptif"><?php echo $DISCUTE_DATE ?></div></td>
					<td class="cellule">  <?php $reponse = $bdd->query('SELECT COUNT(*) AS nbsujets  FROM sous_categorie_forum WHERE categorie_forum_ID=4 ');

$count = $reponse->fetch(PDO::FETCH_ASSOC);   
       
     echo $count['nbsujets'];   
?>  </td>

				</tr>
			</tbody>
		</table>



</nav>


<footer> 
	

	<div id ="footer"> 
		
			
				<a href="#" class="boutonforum"  style="text-decoration:none"><div class="faqcontact"><?php echo $TXT_FAQ ?></div></a></li>
				<a href="#" class= "boutonforum"  style="text-decoration:none"><div class="faqcontact"><?php echo $TXT_CONTACTS ?></div></a></li>
			
		
	</div>

</footer>
</body>
