 <html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v)
                echo '<p> Voiture d\'immatriculation <a href=http://webinfo.iutmontp.univ-montp2.fr/~viatord/Davio-Viator/TD4/controller/routeur.php?action=read&immat='.urlencode($v->getImmatriculation()).'>' . $v->getImmatriculation() .'</a>.</p>';
            //' de couleur ',$v->getCouleur(),' de marque ',$v->getMarque()
        ?>
    </body>
</html>
<!-- --><?php
?>