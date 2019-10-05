<?php
require_once ('../model/ModelVoiture.php');
class ControllerVoiture{
    public static function readAll(){
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require('../view/voiture/list.php');  //"redirige" vers la vue
    }
    public static function read(){
        if( ModelVoiture::getVoitureByImmat($_GET["immat"])==null){
            require('../view/voiture/error.php');
        }else{
            $tab_v = ModelVoiture::getVoitureByImmat($_GET["immat"]);
            require('../view/voiture/detail.php');
        }
    }
     public static function create(){
        require('../view/voiture/create.php');
     }
     public static function created(){
         $marque=$_GET['marque'];
         $couleur=$_GET['couleur'];
         $immatriculation=$_GET['immatriculation'];
         $Voiture = new ModelVoiture($marque,$couleur,$immatriculation);
         $Voiture->save();
         $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
         require('../view/voiture/list.php');
     }
     public static function delete(){
        require ('../view/voiture/delete.php');


     }
     public static function deleted(){
         ModelVoiture::delete($_GET["immat"]);
         $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
         require('../view/voiture/list.php');

     }
}
?>
