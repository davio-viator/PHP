<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title><?php echo $pagetitle; ?></title>
        </head>
        <body>
        <div>
            <nav>
                <ul>
                    <li> <a href = "index.php?action=readAll">liste des voiture</a></li>
                    <li><a href = "index.php?action=readAll&controller=utilisateur">Liste des utilisateur</a></li>
                    <li><a href = "index.php?action=readAll&controller=trajet">Liste des trajet</a></li>
                </ul>
            </nav>
        </div>
            <?php
            require_once ('lib/File.php');
            // Si $controleur='voiture' et $view='list',
            // alors $filepath="/chemin_du_site/view/voiture/list.php"
            //echo array("view", $controller, "$view.php");
            $filepath = File::build_path(array("view", $controller, "$view.php"));
            var_dump($filepath);
            require ($filepath);
            ?>

        <footer>
            <p style="border: 1px solid black;text-align:right;padding-right:1em;">
                Site de covoiturage de ...
            </p>
        </footer>
        </body>
    </html>