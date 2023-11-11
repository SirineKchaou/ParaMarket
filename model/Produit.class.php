 <?php

class Produit{
private $reference;
private $categorie;
private $date;
private $stocke;
private $prix;
private $description;
private $image;




function __construct($reference,$categorie,$date,$stocke,$prix,$description,$image){
$this->reference = addslashes($reference);
$this->categorie = addslashes($categorie);
$this->date= addslashes($date);
$this->stocke = addslashes($stocke);
$this->prix = addslashes($prix);
$this->description = addslashes($description);
$this->image = addslashes($image);

}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `produit`(`reference`, `categorie`, `date`, `stocke`, `prix`, `description`, `image`)	VALUES ('$this->reference','$this->categorie','$this->date','$this->stocke','$this->prix','$this->description','$this->image')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}


public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `produit` SET `reference`='$this->reference',`categorie`='$this->categorie',`date`='$this->date',`stocke`='$this->stocke',`prix`='$this->prix',`description`='$this->description',`image`='$this->image' WHERE `produit`.`id` = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}

}



?>