<?php

if($_SESSION['pseudo']==$_GET['profil']){
include('modeles/modele_utilisateur.php');
$nom=$_GET['profil'];
$info = infoProfil($nom);
include('vues/header.php');
include('vues/vue_gestionprofil.php');
include('vues/footer.php');
}

if (empty($_POST['pseudo'])){
}
if (!empty($_POST['pseudo'])){
modifierPseudoProfil($pseudo);
}
if (empty($_POST['adresse_mail'])){
}
if (!empty($_POST['adresse_mail'])){
modifierAdresseMailProfil($adresse_email);
}	
if (empty($_POST['adresse'])){
}
if (!empty($_POST['adresse'])){
modifierAdresseProfil($adresse );
}
else{

}

?>