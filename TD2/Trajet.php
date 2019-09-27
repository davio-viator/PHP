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

}
?>