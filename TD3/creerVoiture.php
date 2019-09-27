<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8" />
        <title> Voiture </title>
    </head>
   
    <body>
      <?php
      require_once("Voiture.php");
      $marque=$_POST["marque"];
      $couleur=$_POST["couleur"];
      $immatriculation=$_POST["immatriculation"];
      $Voiture = new Voiture($marque,$couleur,$immatriculation);
      $Voiture->afficher();
      $Voiture->save();
      ?>
    </body>
</html>