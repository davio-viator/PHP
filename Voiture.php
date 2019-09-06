<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 

  public function getCouleur(){
  	return $this->$couleur;
  }

  public function getImmatriculation(){
  	return $this->immatriculation;
  }

  public function setCouleur($c){
  	$this->couleur=$c;
  }

  public function setImmatriculation($i){
  	if(strlen($i)>8){
  		echo("<br> Immatriculation trop longue veuillez recomencer <br>");
  	}else{
  		$this->$immatriculation=$i;
  	}
  	
  }

           
  // une methode d'affichage.
  public function afficher() {
    echo("Marque : $this->marque <br> Couleur : $this->couleur <br> Immatriculation : $this->immatriculation");
  }
}
?>