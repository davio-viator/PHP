<?php
    require_once ('Trajet.php');
    require_once ('Utilisateur.php');

    $tab_res = Trajet::findPassagers(1);
    foreach ($tab_res as $valeur){
        echo $valeur;
    }

?>
