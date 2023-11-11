<?php 
require_once('../model/Admin.class.php');
$admin = new admin($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mp']);
$admin->modifier();
header("Location:../listAdmin.php?resultat=oui");
//echo "oui";
//exit();
?>
