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
    public function __construct($m = NULL, $c = NULL, $i = NULL)
    {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            // Si aucun de $m, $c et $i sont nuls,
            // c'est forcement qu'on les a fournis
            // donc on retombe sur le constructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }

  public function getCouleur(){
  	return $this->couleur;
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
  		$this->immatriculation=$i;
  	}
  	
  }

           
  // une methode d'affichage.
  public function afficher() {
    echo("Marque : $this->marque <br> Couleur : $this->couleur <br> Immatriculation : $this->immatriculation<br>");
  }

  public static function getAllVoitures(){
      require_once("Model.php");
      $rep = Model::$pdo->query("SELECT * FROM Voiture");
      $rep->setFetchMode(PDO::FETCH_CLASS,'Voiture');
      $tab_res = $rep->fetchAll();
      return $tab_res;
  }

    public static function getVoitureByImmat($immat) {
        $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }
}
?>