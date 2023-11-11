<?php
class CnxClient{
private $email;
private $mp;

        
function __construct($email,$mp){
$this->email = $email;
$this->mp = md5($mp);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE email = '$this->email' AND mp = '$this->mp'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['prenom'] = $resultat['prenom'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['tel'] = $resultat['tel'];
       $_SESSION['mp'] = $resultat['mp'];
       $_SESSION['adresse'] = $resultat['adresse'];
       
	   
	header('location:../index.php');


} 

}
}


$client = new CnxClient($_POST['email'],$_POST['mp']);


?>