<?php 

require_once('../model/Admin.class.php');

$admin = new Admin($_POST['nom'],$_POST['prenom'], $_POST['email'], $_POST['mp']);

$admin->ajouter();
header("Location:../listAdmin.php?resultat=oui");
//echo "oui";
//exit();
?>
