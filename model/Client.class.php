<?php
class Client{
private $nom;
private $prenom;
private $email;
private $tel;
private $mp;
private $adresse;



function __construct($nom,$prenom,$email,$tel,$mp,$adresse){
$this->nom = addslashes($nom);
$this->prenom = addslashes($prenom);
$this->email = addslashes($email);
$this->tel = addslashes($tel);
$this->mp = md5($mp);
$this->adresse = addslashes($adresse);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`nom`, `prenom`, `email`, `tel`, `mp`, `adresse`)	VALUES ('$this->nom','$this->prenom','$this->email','$this->tel','$this->mp','$this->adresse')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET `nom`='$this->nom',`prenom`='$this->prenom',`email`='$this->email',`tel`='$this->tel',`mp`='$this->mp',`adresse`='$this->adresse' WHERE `client`.`id` = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}





?>