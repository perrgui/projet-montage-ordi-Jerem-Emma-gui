 <?php
    //PAGE FONDAMENTALEMENT SIMILAIRE A PAGEcONCEPTEUR MAIS JUSTE REQUETE SQL DIFFERENTE 
    $updateModele = new Modele();
    if (!empty($_POST)) {
        $date = new DateTime();
        $updateModele->setDateajout($date->format('Y-m-d'));
        $updateModele->setEstportable($_POST['EstPortable']);

        if ($updateModele->isValid()) {
            $statement = $connection->prepare('UPDATE modele SET (nom ,estportable , nb  , dateajout , quantite ) = (:nom , :estportable , :nb, :dateajout , :quantite) WHERE id_modele == this.id_modele');
            // Notre paramètre :name sera remplacé par la valeur de $param, à l'exécution de la requête

            $statement->execute([
                ':nom' => $updateModele->getNom(),
                ':estportable' => $updateModele->getEstPortable(),
                ':nb' => $updateModele->getNb(),
                ':dateajout' => $updateModele->getDateajout(),
                ':quantite' => $updateModele->getQuantite(),
            ]);

            $statement = $connection->prepare('INSERT INTO composant (nom , marque , prix , nb , categorie , archive , quantite ) VALUES (:nom, :marque, :prix, :nb, :categorie, :archive, :quantite)');

            foreach ($composants as $composant) {
                $statement->execute([
                    ':nom' => $composant['nom'],
                    ':marque' => $composant['marque'],
                    ':prix' => $composant['prix'],
                    ':nb' => $composant['nb'],
                    ':categorie' => $composant['categorie'],
                    ':archive' => $composant['archive'],
                    ':quantite' => $composant['quantite'],
                ]);
            }
        }
    }
    $sql = "SELECT * FROM composant ORDER BY categorie ";
    $pdoStatement = $connection->prepare($sql);
    $success = $pdoStatement->execute();
    $composants = $pdoStatement->fetchAll();
    var_dump($composants);


    ?>


 <div class='container-fluid'>
     <form class="row g-3 needs-validation" method="POST">
         <div class="col-md-4 position-relative">
             <label for="validationTooltip01" class="form-label">changer nom modèle</label>
             <input type="text" class="form-control" id="validationTooltip01" name="nom" value="<?php $formModele->getNom(); ?>" required>
             <div class="valid-tooltip">
                 Looks good!
             </div>
         </div>
         <div class="col-md-3 position-relative">
             <label for="validationTooltip04" class="form-label">est portable </label>
             <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                 <option disabled value="">Choose...</option>
                 <option value="0" <?php if ($formModele->getEstPortable() == 0) {
                                        echo 'selected';
                                    } ?>>Tour</option>
                 <option value="1" <?php if ($updateModele->getEstPortable() == 1) {
                                        echo 'selected';
                                    } ?>>portable</option>
             </select>
             <div class="invalid-tooltip">
                 veuillez le définir comme tour ou portable
             </div>
         </div>
         <div class="col-md-4 position-relative">
             <label for="validationTooltip02" class="form-label">date d'ajout (YYYY-MM-DD)</label>
             <input type="text" class="form-control" id="validationTooltip02" name="dateajout" value="<?php $formModele->getDateajout(); ?>" required>
             <div class="valid-tooltip">
                 Looks good!
             </div>
         </div>

         <div class="col-md-6 position-relative">
             <label for="validationTooltip03" class="form-label">quantité en stock</label>
             <input type="text" class="form-control" id="validationTooltip03" name="quantite" value="<?= $formModele->getQuantite(); ?>" required>
             <div class="invalid-tooltip">
                 une quantité doit être renseignée.
             </div>
         </div>
         <div class="col-md-3 position-relative">
             <label for="validationTooltip05" class="form-label">nombre de pc basé sur modèle.</label>
             <input type="text" class="form-control" id="validationTooltip05" name="nombre" value="<?= $formModele->getNb(); ?>" required>
             <div class="invalid-tooltip">
                 veuillez entrez le nombre d'ordinateurs crées via ce modèle.
             </div>
         </div>

         <br>
         <h2 class="title-primary">composants du modèle</h2>
         <br>

         <table class="table table-striped">
             <thead>
                 <tr>
                     <th scope="col">catégorie</th>
                     <th scope="col">nom pièce</th>
                     <th scope="col">marque</th>
                     <th scope="col">quantité</th>
                     <th scope="col">ajout à modèle</th>composant
                     <th scope="col">suppression à modèle</th>
                 </tr>
             </thead>

             <?php
                /** @var array $composants */
                foreach ($composants as $key => $composant) { ?>
                 <tr class="table-primary">
                     <th><strong> <?= $composant['categorie'] ?> </strong></th>
                     <th><strong><?= $composant['nom'] ?></strong></th>
                     <th><strong><?= $composant['marque'] ?></strong></th>
                     <th><?= $composant['quantite'] ?></th>
                     <td> <button class="btn btn-primary" type="submit">ajout pièce</button></td>
                     <td> <button class="btn btn-primary" type="submit">enlever pièce</button></td>
                 </tr>
             <?php } ?>
         </table>
     </form>
 </div>