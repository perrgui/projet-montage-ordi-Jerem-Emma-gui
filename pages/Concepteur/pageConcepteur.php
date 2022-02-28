 <?php


    $formModele = new Modele();
    if (!empty($_POST)) {
        $date = new DateTime();
        $formModele->setDateajout($date->format('Y-m-d'));
        $formModele->setEstportable($_POST['EstPortable']);

        if ($formModele->isValid()) {
            $statement = $connection->prepare('INSERT INTO modele (nom ,estportable , nb  , dateajout , quantite ) VALUES (:nom , :estportable , :nb, :dateajout , :quantite)');
            // Notre paramètre :name sera remplacé par la valeur de $param, à l'exécution de la requête

            $statement->execute([
                ':nom' => $formModele->getNom(),
                ':estportable' => $formModele->getEstPortable(),
                ':nb' => $formModele->getNb(),
                ':dateajout' => $formModele->getDateajout(),
                ':quantite' => $formModele->getQuantite(),
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


    ?>
 <!-- créer page concepteur
une page dashboard aura comme fonctionnalité:
données calculées sur statistique machine:
-commentaire monteur (répondu ou non triéé par date)
-modèle monté (nombre ,modifié ,archivé)
-gestion modèle(CRUD: modèle modifié, archivé, créé -->
 <!-- dashboard
to get a dashboard you need to get the data () from the dB  -->

 <div class='container-fluid'>
     <form class="row g-3 needs-validation" method="POST">
         <div class="col-md-4 position-relative">
             <label for="validationTooltip01" class="form-label"> nom modèle</label>
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
                 <option value="1" <?php if ($formModele->getEstPortable() == 1) {
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
         <div class="col-md-3 position-relative">
             <label for="validationTooltip04" class="form-label">nom pièce </label>
             <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                 <option disabled value="">Choose...</option>
                 <option value="0" <?php if ($formModele->getNom() == 0) {
                                        echo 'selected';
                                    } ?>>Tour</option>
                 <option value="1" <?php if ($formModele->getNom() == 1) {
                                        echo 'selected';
                                    } ?>>portable</option>
             </select>
             <div class="invalid-tooltip">
                 veuillez définir le nom de la pièce!
             </div>
         </div>

         <div class="col-md-3 position-relative">
             <label for="validationTooltip04" class="form-label">marque pièce</label>
             <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                 <option disabled value="">Choose...</option>
                 <option value="0" <?php if ($formModele->getMarque() == 0) {
                                        echo 'selected';
                                    } ?>>Tour</option>
                 <option value="1" <?php if ($formModele->getMarque() == 1) {
                                        echo 'selected';
                                    } ?>>portable</option>
             </select>
             <div class="invalid-tooltip">
                 veuillez définir la marque de la pièce!
             </div>
         </div>

         <div class="col-md-3 position-relative">
             <label for="validationTooltip04" class="form-label">est portable </label>
             <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                 <option disabled value="">Choose...</option>
                 <!-- il va falloir voir comment proposer tous les choix de catégorie -->
                 <option value="0" <?php if ($formModele->getCategorie() == 0) {
                                        echo 'selected';
                                    } ?>>Tour</option>

                 <option value="1" <?php if ($formModele->getCategorie() == 1) {
                                        echo 'selected';
                                    } ?>>portable</option>
             </select>
             <div class="invalid-tooltip">
                 veuillez définir le type de pièce!
             </div>
         </div>

         <div class="col-md-3 position-relative">
             <label for="validationTooltip04" class="form-label">est portable </label>
             <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                 <option disabled value="">Choose...</option>
                 <!--on va avoir un petit problème par rapport au fait que deux classes différentes aient un getter/setter avec un nom similaire-->
                 <option value="0" <?php if ($formModele->getQuantite() == 0) {
                                        echo 'selected';
                                    } ?>>Tour</option>
                 <option value="1" <?php if ($formModele->getQuantite() == 1) {
                                        echo 'selected';
                                    } ?>>portable</option>
             </select>
             <div class="invalid-tooltip">
                 veuillez le définir comme tour ou portable
             </div>
         </div>

         <div class="col-md-6 position-relative">
             <label for="validationTooltip03" class="form-label">prix de la pièce</label>
             <input type="text" class="form-control" id="validationTooltip03" name="prix" value="<?= $formModele->getPrix(); ?>" required>
             <div class="invalid-tooltip">
                 un prix doit être renseignée.
             </div>
         </div>

         <div class="col-md-6 position-relative">
             <label for="validationTooltip03" class="form-label">nombre de Modèles utilisant cette pièce</label>
             <!-- même problème que plus haut, conflit entre noms de getter/setter de pièces et modèles-->
             <input type="text" class="form-control" id="validationTooltip03" name="prix" value="<?= $formModele->getNb(); ?>" required>
             <div class="invalid-tooltip">
                 un prix doit être renseignée!
             </div>
         </div>


         <div class="col-md-3 position-relative">
             <label for="validationTooltip04" class="form-label">est archivé </label>
             <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                 <option disabled value="">Choose...</option>
                 <option value="0" <?php if ($formModele->getArchive() == 0) {
                                        echo 'selected';
                                    } ?>>en stock</option>
                 <option value="1" <?php if ($formModele->getArchive() == 1) {
                                        echo 'selected';
                                    } ?>>archivé</option>
             </select>
             <div class="invalid-tooltip">
                 veuillez préciser si la pièce est archivé ou non!
             </div>
         </div>


         <!-- <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
           </label>
           
       </div> -->