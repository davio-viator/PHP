<?php
require_once("Model.php");
require_once("Voiture.php");
$tab_res =Voiture::getAllVoitures();
/*foreach ($tab_res as $value){
    $value->afficher();
}*/
$tab = Voiture::getVoitureByImmat("AC 315 H");
echo $tab->afficher();
$v = new Voiture("Rolce Royce","gris","AB 123 C");
$v->save();




