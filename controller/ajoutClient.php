<?php 
require_once('../model/Client.class.php');
$client = new Client($_POST['nom'],$_POST['prenom'], $_POST['email'], $_POST['tel'], $_POST['mp'], $_POST['adresse']);
$client->ajouter();
header("Location:../listclient.php?resultat=oui");
//echo "oui";
//exit();
?>
