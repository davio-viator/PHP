<?php
require_once ('../model/ModelVoiture.php');
class ControllerVoiture{
    public static function readAll(){
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require('../view/voiture/list.php');  //"redirige" vers la vue
    }
    public static function read(){
        $tab_v = ModelVoiture::getVoitureByImmat($_GET["immat"]);
        require('../view/voiture/detail.php');
    }
}
?>
