<?php 
require_once('../model/Produit.class.php');
include('../includes/connect_db.php');
$req = $bdd->query('SELECT * FROM produit where  id='.$_GET['id'])->fetch(); 
$produit = new produit($req['reference'],$req['categorie'], $req['date'], $req['stocke'], $req['prix'], $req['description'], $req['image']);
$produit->supprimer($_GET['id']);
header("Location:../listProduit.php?resultat=oui");

?>
