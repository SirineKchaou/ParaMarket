<?php 

require_once('../model/Produit.class.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;

$produit = new Produit($_POST['reference'],$_POST['categorie'], $_POST['date'], $_POST['stocke'], $_POST['prix'], $_POST['description'], $_FILES["image"]["name"]);

$produit->ajouter();
header("Location:../listProduit.php?resultat=oui");
//echo "oui";
//exit();
?>
