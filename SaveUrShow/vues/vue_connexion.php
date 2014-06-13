<html>
<form method="post" action="index.php?page=connexion">
<div class="formulaire">
	<div class="details"><?php echo $CONNEXION ?> :</div>
	<p>
	<label for="pseudo" class="standard"><?php echo $TXT_PSEUDO ?> :</label><input name="pseudo" type="text" id="pseudo" /><br />
	<label for="password" class="standard"><?php echo $TXT_MDP ?> :</label><input type="password" name="password" id="password" />
	</p>
	
	<p class="details"><input type="submit" value="<?php echo $CONNEXION ?>" /></p></form>
	<p class="details"><a href="index.php?page=inscription"><?php echo $TXT_QUESTION ?></a></p>
</div> 
</html>
