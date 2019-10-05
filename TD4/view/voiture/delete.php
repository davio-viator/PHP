<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures a suprimmer</title>
    </head>
    <body>
    <form method="get" action="../../controller/routeur.php">
        <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
                <input type="hidden" name="action" value="deleted">
                <label for="immat_id">Immatriculation de la voiture a supprimer</label> :
                <input type="text" placeholder="Ex : 256AB34" name="immat" id="immat_id" required/>
            </p>
            <p>
                <input type="submit" value="Envoyer"  />
            </p>
        </fieldset>
    </body>
</html>

