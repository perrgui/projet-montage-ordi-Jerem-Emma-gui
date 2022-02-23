    <!--  créer page modèle  qui contient
-liste modèle 
-modifier modèle(archiver, ajouter/retirer, historique( date , nombre d'entrées) )
-création nouveau modèle -->

<?php

// nom,quantité (en stock),date ajout, nb (de fois fabriqué), est portable

$modeles = [

    1 => [
        "nom" => "Dell",
        "quantité" => 5,
        "date ajout" => "2019-02-17",
        "nb" => 15,
        "est portable" => 0,
    ],

    2 => [
        "nom" => "Apple",
        "quantité" => 20,
        "date ajout" => "2022-02-17",
        "nb" => 250,
        "est portable" => 0,
    ],

    1 => [
        "nom" => "Microsoft",
        "quantité" => 70,
        "date ajout" => "2021-04-24",
        "nb" => 186,
        "est portable" => 0,
    ],

    3 => [
        "nom" => "Toshiba",
        "quantité" => 150,
        "date ajout" => "2019-05-03",
        "nb" => 50,
        "est portable" => 1,
    ],

    4 => [
        "nom" => "Sony",
        "quantité" => 300,
        "date ajout" => "2018-06-08",
        "nb" => 100,
        "est portable" =>  0,
    ],

    5 => [
        "nom" => "HP",
        "quantité" => 200,
        "date ajout" => "2022-01-02",
        "nb" => 46,
        "est portable" =>  1,
    ],

    6 => [
        "nom" => "Asus",
        "quantité" => 483,
        "date ajout" => "2021-11-16",
        "nb" => 95,
        "est portable" => 1,
    ],

    7 => [
        "nom" => "Acer",
        "quantité" => 356,
        "date ajout" => "2018-12-04",
        "nb" => 90,
        "est portable" =>  1,
    ],

    8 => [
        "nom" => "Fujitsu",
        "quantité" => 20,
        "date ajout" => "2021-05-14",
        "nb" => 256,
        "est portable" => 0,
    ],

    9 => [
        "nom" => "Lenovo",
        "quantité" => 263,
        "date ajout" => "2021-06-12",
        "nb" => 58,
        "est portable" => 0,
    ],

    10 => [
        "nom" => "LG",
        "quantité" => 346,
        "date ajout" => "2020-10-02",
        "nb" => 632,
        "est portable" => 0,
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modèles</title>
</head>



</body>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Quantité</th>
            <th>Date d'ajout</th>
            <th>Nombre de modèles crées</th>
            <th>Portable</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /** @var array $modeles */
        foreach ($modeles as $key => $modele) {
        ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $modele['nom']; ?></td>
                <td><?= $modele['quantité']; ?></td>
                <td><?= $modele['date ajout']; ?></td>
                <td><?= $modele['nb']; ?></td>
                <td><?= $modele['est portable']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

</html>
