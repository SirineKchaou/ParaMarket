<?php 
require_once('../model/Produit.class.php');
//var_dump($_POST) ; exit;
$produit = new Produit($_POST['reference'],$_POST['categorie'], $_POST['date'], $_POST['stocke'], $_POST['prix'], $_POST['description'], $_FILES["image"]["name"]);
//print_r($produit) ;exit();
$produit->modifier();
header("Location:../listproduit.php?resultat=oui");
//echo "oui";
//exit();
?>
