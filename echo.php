<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";
          $nom = "Ulrich";
          $texte2 = "hello" . 'World !';

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;
          echo "<br> yo $nom ";
          echo "<br> $texte2";
          /*echo <<<EOT
          bon écoute $nom
          tu va mourire dans
          3
          2
          1
EOT;*/
          print_r($texte);
          echo "<br>";
          var_dump($texte);
          $tab = array();
          $id['nom'] = 'David';
          $id['prenom'] = 'Victor';
          $tebb =  array(
            'prenom' => 'Davido',
            'nom ' => 'Victoro'
          );
          $tabt= array ('toto', 'tata','titi');
          echo ("<br>");
          foreach ($id as $key => $value) {
            echo("$key : $value");
            echo("<br>");
          }
          echo "<br>";
          for($i = 0;$i<count($tabt);$i++){
            echo $tabt[$i];
            echo("<br>");
          }

           $marque = "Mercedes";
           $couleur = "noir";
           $immatriculation = "AC 315 HY";

           echo"Voiture $immatriculation de marque $marque (couleur $couleur)";

           $Voiture = array('marque' => 'Ferrari', 'couleur' =>'bleu', 'immatriculation' => 'BE 508 CD' ); 
           $Voiture1 = array('marque' => 'Subaru', 'couleur' =>'gris métal', 'immatriculation' => 'BA 162 PD' ); 
           echo "<br>";
           var_dump($Voiture);
           echo "<br>";
           echo("<h1>Liste des voitures</h1>");
           //echo("<ul>");
           $listevoiture = array( $Voiture ,$Voiture1 );
           /*foreach($Voiture as $Key => $Value){
                        echo("<li>$Key : $Value </li>");
                      }
            echo("</ul>");*/
            echo("<ul>");
            foreach ($listevoiture as $key => $Value) {
              echo("<br>");
              foreach ($Value as $test => $vaalue) {
                echo("<li>$test : $vaalue</li>");
              }
            }
            echo ("</ul>");

        ?>
    </body>
</html> 