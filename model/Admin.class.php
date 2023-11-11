<?php
class Admin{ 
private $nom;
private $prenom;
private $email;
private $mp;



function __construct($nom,$prenom,$email,$mp){
$this->nom = addslashes($nom);
$this->prenom = addslashes($prenom);
$this->email = addslashes($email);
$this->mp = md5($mp);


}



public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `admin`(`nom`, `prenom`, `email`, `mp`)	VALUES ('$this->nom','$this->prenom','$this->email','$this->mp')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `nom`='$this->nom',`prenom`='$this->prenom',`email`='$this->email',`mp`='$this->mp' WHERE id = $id ");
				
        
        echo'oui';
        
}	





 
public function supprimer(string $id){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}





?>