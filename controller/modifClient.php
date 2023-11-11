<?php 
require_once('../model/Client.class.php');
$client = new Client($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mp'], $_POST['tel'], $_POST['adresse']);
$client->modifier();
header("Location:../listClient.php?resultat=oui");
//echo "oui";
//exit();
?>
