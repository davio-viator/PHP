<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v)
            echo '<p> La voiture immatriculé ', $v->getImmatriculation(), ' de marque ', $v->getMarque(), ' et de couleur ',$v->getCouleur(),' .</p>';
        ?>
    </body>
</html>
