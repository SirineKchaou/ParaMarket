<?php 
require_once('../model/Admin.class.php');
include('../includes/connect_db.php');
$req = $bdd->query('SELECT * FROM admin where  id='.$_GET['id'])->fetch(); 
$admin = new admin($req['nom'],$req['prenom'], $req['email'], $req['mp']);
$admin->supprimer($_GET['id']);
header("Location:../listAdmin.php?resultat=oui");

?>
