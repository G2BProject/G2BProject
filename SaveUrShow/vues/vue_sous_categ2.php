
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
                    <th> AVIS ET SUGGESTIONS </th>
                    <th> NOMBRE MESSAGES </th>
                    <th> DERNIER MESSAGE </th>
                </tr>       
            </thead>

            <tbody>
                <tr>
                    <td class="cellule"> <a href= "?page=reponse" style="text-decoration:none"> <?php $reponse = $bdd->query('SELECT sous_categorie_forum  FROM sous_categorie_forum WHERE categorie_forum_ID =2 ORDER BY ID DESC ');

while ($donnees = $reponse->fetch())
{
      echo '<a href= "?page=messageforum&post='.$donnees['sous_categorie_forum'].'" style="text-decoration:none">'.$donnees['sous_categorie_forum'] . '<br /></div></a>';
}

$reponse->closeCursor();
?>
</div></a></br>
                                    </td>
                    <td class="cellule">  </td>
                    <td class="cellule">  </a></td>
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
