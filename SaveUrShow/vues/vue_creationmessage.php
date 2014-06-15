
<head>
<link rel="stylesheet" href="ressources/style_forum.css" type="text/css" media="screen" />

	<meta charset="utf-8" />
	<title> SaveUrShow/Forum </title>
</head>


<body>
	

<header> 
	
<!-- 	<form id="search" method="post">
	<div class="btn-left-loupe"></div>
	<input class="search_data" name="saisie" type="text" placeholder="Recherche..." required />
	<input class="btn-right-fleche" name="go" type="submit"  value="" />
	</form> -->
					
	<a href= "?page=accueil"> <img src=ressources/image/Titre.png alt= "nom logo" /></a>

</header>
<div class="decalage"><br><br><br><br>
	<?php 
		    foreach ($query as $message){
		    	$membre_ID=$message['membre_ID'];
		    	$query=$bdd->prepare('SELECT pseudo,image_membre FROM membre WHERE ID = :ID');
		        $query->bindValue(':ID',$membre_ID, PDO::PARAM_STR);
		        $query->execute();
			    $data=$query->fetch();
			    $membre= $data['pseudo'];
			    $image=$data['image_membre'];


			 echo' <div class="conteneur">'.$membre.'<br>
			<img class="imgmembre" alt="photo_membre" width="80" height="80" src="'.$image.'" /><br>
			<div class="titremessage">  '.$message['titre_message'].'<br></div>
			<div class="message">'.$message['contenu_message'].'<br></div>
			 <div class="date"> le : '.$message['date_ajout_message'].'<br></div></div>';
		}
	 ?>
<nav>
				
<form action="index.php?page=messageforum&post=<?php echo $post ?>" method="post" >
	<?php 
			if (!isset($_SESSION['pseudo'])){
				echo '
				<ul><li><a href="?page=connexion"class="boutonforum"  style="text-decoration:none">Connexion</a>
				<a href="?page=inscription" class="boutonforum"  style="text-decoration:none">Inscription</a></li></ul>

				<footer> 
					

					<div id ="footer"> 
						
							
								<a href="#" class="boutonforum"  style="text-decoration:none"><div class="faqcontact">FAQ</div></a>
								<a href="#" class= "boutonforum"  style="text-decoration:none"><div class="faqcontact">Contacts</div></a>
							
						
					</div>

				</footer>
				</body>
								';

			}else{
				echo'
				<ul><li><a href="?page=profil&profil='.$_SESSION['pseudo'].'" class="boutonforum"  style="text-decoration:none">'.$_SESSION['pseudo'].'</a></li></ul>
					

				</p>
				<p><div class="styleform">titre: </div><br />
				  <label for="titre_message"></label>
				  <textarea name="titre_message" id="titre_message" cols="45" rows="2"></textarea>
				</p>
				<p><div class="styleform" >Message:</div><br />
				  <label for="contenu_message"></label>
				  <textarea name="contenu_message" id="contenu_message" cols="45" rows="5"></textarea>
				</p>
				<p>
				  <input type="submit" name="submit" id="submit" value="Poster message" />
				</p>
				</form>
				</nav>
				</body>
				</nav>


				<footer> 
					

					<div id ="footer"> 
						
							
								<a href="#" class="boutonforum"  style="text-decoration:none"><div class="faqcontact">FAQ</div></a></li>
								<a href="#" class= "boutonforum"  style="text-decoration:none"><div class="faqcontact">Contacts</div></a></li>
							
						
					</div>
					</div>

				</footer>
				</body>
				';
				
			}
			 ?>
