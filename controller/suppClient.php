<?php 
require_once('../model/Client.class.php');
include('../includes/connect_db.php');
$req = $bdd->query('SELECT * FROM client where  id='.$_GET['id'])->fetch(); 
$client = new Client($req['nom'],$req['prenom'], $req['email'], $req['tel'], $req['adresse'], $req['mp']);
$client->supprimer($_GET['id']);
header("Location:../listClient.php?resultat=oui");

?>
