<?php
class Trajet {

	private $id;
	private $depart;
	private $arrivee;
	private $date;
	private $nbplaces;
	private $prix;
	private $conducteur_login;

	public function __construct($tab)  {
		$this->$id=$tab[0];
		$this->$depart=$tab[1];
		$this->$arrivee=$tab[2];
		$this->$date=$$tab[3];
		$this->$nbplaces=$tab[4];
		$this->$prix=$tab[5];
		$this->$conducteur_login=$tab[6];
  	}

  	public function set($attribute,$value) {
       $this->$attribute=$value;
  	} 

  	public function get($attribute){
  		return $this->$attribute;
  	}

}
?}