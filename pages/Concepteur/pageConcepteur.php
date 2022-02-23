<?php
include_once '../../includes/header.php';
include_once '../login/models.php';
include_once '../../classe/Modele.php';

$formModele = new Modele($_POST);
$status = "";
if ($formModele->isSubmitted() && $formModele->isValid()) {

    $statement = $connection->prepare('INSERT INTO modele (nom ,estportable , nb  , dateajout , quantite ) VALUES (:nom , :estportable , :nb, :dateajout , :quantite)');
    // Notre paramètre :name sera remplacé par la valeur de $param, à l'exécution de la requête
    // foreach ($modeles as $modele) {
    $statement->execute([
        ':nom' => $modele['nom']->getNom(),
        ':estportable' => $modele['estportable']->getEstPortable(),
        ':nb' => $modele['nb']->getNombre(),
        ':dateajout' => $modele['dateajout']->getDateAjout(),
        ':quantite' => $modele['quantite']->getQuantite(),
    ]);
    // }
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
    <aside></aside>
    <main></main>
    <footer>
        <form class="row g-3 needs-validation" novalidate method="POST">
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label"> nom modèle</label>
                <input type="text" class="form-control" id="validationTooltip01" name="nom" value="<?= $form->getNom() ?>" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 position-relative">
                <label for="validationTooltip04" class="form-label">est portable (1=oui, 0=non)</label>
                <select class="form-select" id="validationTooltip04" name="EstPortable" required>
                    <option disabled value="">Choose...</option>
                    <option value="0" <?php if ($modele->getEstPortable() == 0) {
                                            echo 'selected';
                                        } ?>>Tour</option>
                    <option value="1" <?php if ($modele->getEstPortable() == 1) {
                                            echo 'selected';
                                        } ?>>portable</option>
                </select>
                <div class="invalid-tooltip">
                    veuillez le définir comme tour ou portable
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip02" class="form-label">date d'ajout (YYYY-MM-DD)</label>
                <input type="text" class="form-control" id="validationTooltip02" name="dateAjout" value="<?= $form->getDateAjout() ?>" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>

            <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">quantité en stock</label>
                <input type="text" class="form-control" id="validationTooltip03" name="quantite" value="<?= $form->getQuantite() ?>" required>
                <div class="invalid-tooltip">
                    une quantité doit être renseignée.
                </div>
            </div>
            <div class="col-md-3 position-relative">
                <label for="validationTooltip05" class="form-label">nombre de pc basé sur modèle.</label>
                <input type="text" class="form-control" id="validationTooltip05" name="nombre" value="<?= $form->getNombre() ?>" required>
                <div class="invalid-tooltip">
                    veuillez entrez le nombre d'ordinateurs crées via ce modèle.
                </div>
            </div>
            <div class="col-12">

                <button class="btn btn-primary" type="submit" id="formModele">Submit form</button>
            </div>

            <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                </label>
            
            </div> -->


        </form>
    </footer>
</div>