<!DOCTYPE html>
    <html>
        <head>
          <title></title>
        </head>
        <body>
        <form method="get" action="../../controller/routeur.php">
          <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
                <input type="hidden" name="action" value="created">
              <label for="immat_id">Immatriculation</label> :
              <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
                <label for="marque_id">Marque</label> :
              <input type="text" placeholder="Ex : Mercedes" name="marque" id="marque_id" required/>
                <label for="couleur_id">Couleur</label> :
              <input type="text" placeholder="Ex : vert" name="couleur" id="couleur_id" required/>
            </p>
            <p>
              <input type="submit" value="Envoyer"  />
            </p>
          </fieldset>
        </form>
        </body>
    </html>
