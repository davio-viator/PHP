<?php
    require_once ('lib/File.php');
    require_once ('ControllerVoiture.php');
    if(!$_GET==null){
        $action = $_GET["action"];
        ControllerVoiture::$action();
    }else{
        /*$action = $_GET["action"];
        ControllerVoiture::$action();*/
    }

?>
