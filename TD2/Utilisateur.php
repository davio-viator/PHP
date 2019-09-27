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
  public function __construct($l = NULL, $n = NULL, $p = NULL)  {
      if(!is_null($l) && !is_null($n) && !is_null($p)){
          $this->login = $l;
          $this->nom = $n;
          $this->prebom = $p;
      }

  } 

  public function getLogin(){
  	return $this->login;
  }

  public function getPrenom(){
  	return $this->prebom;
  }

  public function setLogin($c){
  	$this->login=$c;
  }

  public function setPrenom($i){
  	// if(strlen($i)>8){
  	// 	echo("<br> Immatriculation trop longue veuillez recomencer <br>");
  	// }else{
  		$this->prenom=$i;
  	//}
  	
  }

           
  // une methode d'affichage.
  public function afficher() {
    echo("Login : $this->login <br> Nom: $this->nom <br> prenom : $this->prenom");
  }

  public static function getAllUser(){
      require_once("Model.php");
      $rep = Model::$pdo->query("SELECT * FROM Utilisateur");
      $rep->setFetchMode(PDO::FETCH_CLASS,'Utilisateur');
      $tab_res = $rep->fetchAll();
      return $tab_res;
  }
}
?>