<?php
require_once('../model/Produit.class.php');

$target_dir = "../admin/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    include('../includes/connect_db.php');

       //$id=$_GET['user'];
       $data_hby = htmlspecialchars( basename( $_FILES["image"]["name"]));
      echo $data_hby;
        
        


		


    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
/*if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}*/

// Check file size
if ($_FILES["image"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  //header("location:../modifier-profil/?tof=too-large");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  //header("location:../modifier-profil/?tof=not-an-image");
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["name"], $target_file)) {

     //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
   $annonces = new Annonces($_POST['titre'], $_POST['Annonceur'], $_POST['domaine'], $_POST['adresse_annonce'], $_POST['prix'], $_POST['Description'],$_FILES['image']['name'], $_POST['id_annonceur']);

		$annonces->ajouter();
    session_start();
    $id = $_SESSION['id_commissionaire'];
		header("Location:../profil.php?id=$id&resultat=oui");
    //echo $id;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>