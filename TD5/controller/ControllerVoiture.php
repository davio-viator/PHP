<?php
require_once ('lib/File.php');
require_once (File::build_path('model/ModelVoiture.php'));
class ControllerVoiture{
    public static function readAll(){
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        //require('../view/voiture/list.php');  //"redirige" vers la vue
        $controller='voiture';
        $view='list';
        $pagetitle='Liste des voiture';
        require(File::build_path('/view/view.php'));
    }
    public static function read(){
        if( ModelVoiture::getVoitureByImmat($_GET["immat"])==null){
            require(File::build_path('/view/voiture/error.php'));
        }else{
            $tab_v = ModelVoiture::getVoitureByImmat($_GET["immat"]);
            //require('../view/voiture/detail.php');
            require(File::build_path('view/voiture/detail.php'));
        }
    }
     public static function create(){
        //require('../view/voiture/create.php');
         require(File::build_path('view/voiture/create.php'));
     }
     public static function created(){
         $marque=$_GET['marque'];
         $couleur=$_GET['couleur'];
         $immatriculation=$_GET['immatriculation'];
         $Voiture = new ModelVoiture($marque,$couleur,$immatriculation);
         $Voiture->save();
         $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
         //require('../view/voiture/list.php');
         require (File::build_path('view/voiture/list.php'));
     }
     public static function delete(){
        //require ('../view/voiture/delete.php');
         require (File::build_path('view/voiture/delete.php'));


     }
     public static function deleted(){
         ModelVoiture::delete($_GET["immat"]);
         $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
         //require('../view/voiture/list.php');
         require (File::build_path('view/voiture/list.php'));

     }
}
?>
