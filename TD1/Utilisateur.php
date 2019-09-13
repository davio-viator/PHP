<?php
class Utilisateur {
   
  private $login;
  private $nom;
  private $prenom;
      
  // un getter      
  public function getNom() {
       return $this->nom;  
  }
     
  // un setter 
  public function setNom($nom2) {
       $this->nom = $nom2;
  }
      
  // un constructeur
  public function __construct($l, $n, $p)  {
   $this->login = $l;
   $this->nom = $n;
   $this->prebom = $;
  } 

  public function getLogin(){
  	return $this->$login;
  }

  public function getPrenom){
  	return $this->prenom;
  }

  public function setLogin($c){
  	$this->login=$l;
  }

  public function setPrenom($i){
  	// if(strlen($i)>8){
  	// 	echo("<br> Immatriculation trop longue veuillez recomencer <br>");
  	// }else{
  		$this->$prenom=$i;
  	//}
  	
  }

           
  // une methode d'affichage.
  public function afficher() {
    echo("Login : $this->login <br> Nom: $this->nom <br> prenom : $this->prenom");
  }
}
?>