<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
           /* foreach ($tab_v as $v)
            echo '<p> La voiture immatriculé ', $v->getImmatriculation(), ' de marque ', $v->getMarque(), ' et de couleur ',$v->getCouleur(),' .</p>';*/
            //echo htmlspecialchars('<a href="test">Test</a>');
        echo htmlspecialchars('<p> La voiture immatriculé ',$tab_v->getImmatriculation(),' de marque ',$tab_v->getMarque(),' et de couleur ',$tab_v->getCouleur(),'</p>');
        ?>
    </body>
</html>
