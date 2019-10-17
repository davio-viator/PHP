<?php
class ModelVoiture {
   
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
  /*public function afficher() {
    echo("Marque : $this->marque <br> Couleur : $this->couleur <br> Immatriculation : $this->immatriculation<br>");
  }*/

  public static function getAllVoitures(){
      require_once("Model.php");
      try {
          $rep = Model::$pdo->query("SELECT * FROM Voiture");
          $rep->setFetchMode(PDO::FETCH_CLASS,'ModelVoiture');
          $tab_res = $rep->fetchAll();
          return $tab_res;
      } catch (PDOException $e) {
          if (Conf::getDebug()) {
              echo $e->getMessage(); // affiche un message d'erreur
          } else {
              echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
          }
          die();
      }
  }

    public static function getVoitureByImmat($immat) {
      require_once ('../model/Model.php');
        $sql = "SELECT * from Voiture WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }

    public function save(){
      require_once ('Model.php');
      $tab_voit=ModelVoiture::getAllVoitures();
      $sql = "INSERT INTO Voiture (immatriculation,marque,couleur) VALUES (:immatriculation,:marque,:couleur)";
      $valeur = array(
          "immatriculation" =>$this->immatriculation,
          "marque"=>$this->marque,
          "couleur"=>$this->couleur
      );
      $rec_prep = Model::$pdo->prepare($sql);
      $rec_prep->execute($valeur);
    }

    public static function delete($immat){
      require_once('Model.php');
      $tab_voir = ModelVoiture::getAllVoitures();
      $sql = "DELETE FROM Voiture where immatriculation = :immat";
      $valeur = array(
          "immat"=>$immat
      );
      $rec_prep = Model::$pdo->prepare($sql);
      $rec_prep->execute($valeur);

    }
}
?>