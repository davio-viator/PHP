<?php
require_once("Model.php");
require_once("Voiture.php");
$tab_res =Voiture::getAllVoitures();
foreach ($tab_res as $value){
    $value->afficher();
}

