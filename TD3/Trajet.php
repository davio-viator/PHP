<?php
class Trajet {

	private $id;
	private $depart;
	private $arrivee;
	private $date;
	private $nbplaces;
	private $prix;
	private $conducteur_login;

	public function __construct($i = NULL,$d = NULL,$a = NULL,$da = NULL,$n = NULL,$p = NULL,$c = NULL)  {
	    if(!is_null($i) && !is_null($d) && !is_null($a) && !is_null($da) && !is_null($n) && !is_null($c)) {
            $this->id=$i;
            $this->depart=$d;
            $this->arrivee=$a;
            $this->date=$da;
            $this->nbplaces=$n;
            $this->prix=$p;
            $this->conducteur_login=$c;
	    }
  	}

  	public function set($attribute,$value) {
       $this->attribute=$value;
  	} 

  	public function get($attribute){
  		return $this->attribute;
  	}

  	public static function getAllTrajet(){
        require_once("Model.php");
        $rep = Model::$pdo->query("SELECT * FROM Trajet");
        $rep->setFetchMode(PDO::FETCH_CLASS,'Trajet');
        $tab_res = $rep->fetchAll();
        return $tab_res;
    }

    public static function findPassagers($id){
        require_once("Model.php");
        $sql = "SELECT * FROM utilisateur u, trajet t,passager p where :id=:$id AND :user_login=:login";
        // Préparation de la requête
        $values = array(
            "login" => "u.login",
            //"conducteur" =>"t.conducteur_login",
            "id" => "t.id",
            "trajet_id" => "p.trajet_id",
            'user_login' => "p.utilisateur_login"
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep = Model::$pdo->prepare($sql);
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS,'utilisateur,trajet,passager');
        $tab_passager = $req_prep->fetchAll();
        if (empty($tab_passager))
            return false;
        return $tab_passager;
    }

}
?>