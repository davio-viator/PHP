<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
        <title> Voiture Test </title>
    </head>
   
    <body>
    	<?php
    	require_once("Voiture.php");
    	$Voiture1 = new Voiture("Mercedes","Gris","AC 741 BR");
    	$Voiture1->afficher();
    	$Voiture1->setImmatriculation("AC 741 BRE");
    	$s = $Voiture1->getImmatriculation();
    	echo($s);
    	?>
    </body>
</html>