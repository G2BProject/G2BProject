<?php 
session_unset();
session_destroy();
include('controleurs/accueil.php');
echo '<script> alert("Vous etes deconnecté!");	</script>';
exit();
?>