<?php
include 'includes/config.inc.php';

$composants = [

    [
        "nom" => "s2-fe",
        "marque" => "ienovo",
        "prix" => 1220,
        "nb" => 20,
        "categorie" => "alimentation",
        "archive" => 0,
        "quantite" => 200,
        'subdata' => [
            "puissance" => 15.5
        ]
    ],
    [
        "nom" => "rf4-85",
        "marque" => "apple",
        "prix" => 18000,
        "nb" => 11,
        "categorie" => "carte_graphique",
        "archive" => 1,
        "quantite" => 1200,
        'subdata' => [
            'chipset' => 'sgufgbjw-52',
            'memoire' => '32'
        ]
    ],
    [
        "nom" => "a69-te",
        "marque" => "Nvidia",
        "prix" => 220,
        "nb" => 220,
        "categorie" => "memoire_vive",
        "archive" => 0,
        "quantite" => 700,
        'subdata' => [
            'capacite' => '16',
            'type_frequence_norme_memoire' => 'cpu-refv',
            'nombre_de_barettes' => 4
        ]
    ],
    [
        "nom" => "s2-d54v",
        "marque" => "microsoft",
        "prix" => 20,
        "nb" => 29,
        "categorie" => "ecran",
        "archive" => 1,
        "quantite" => 0,
        'subdata' => [
            'Taille_de_la_diagonale' => '27.2'
        ]
    ],
    [
        "nom" => "g402",
        "marque" => "razor",
        "prix" => 120,
        "nb" => 56,
        "categorie" => "souris",
        "archive" => 1,
        "quantite" => 2000,
        'subdata' => [
            'filaire' => 0,
            'nombre_de_touche' => 6,
        ]
    ],
    [
        "nom" => "g48-96jk",
        "marque" => "logitech",
        "prix" => 130,
        "nb" => 203,
        "categorie" => "clavier",
        "archive" => 0,
        "quantite" => 900,
        'subdata' => [
            'sans_fil' => 1,
            'paveNumerique' => 1,
            'typeTouche' => "mecanique",
        ]
    ],
    [
        "nom" => "c3po",
        "marque" => "HP",
        "prix" => 1000,
        "nb" => 2,
        "categorie" => "processeur",
        "archive" => 1,
        "quantite" => 20,
        'subdata' => [
            'frequenceCPU' => 1.75,
            'nombre_de_coeurs' => 3,
            'chipset_compatible' => 'chipset1'
        ]
    ],
    [
        "nom" => "r2d2",
        "marque" => "Asus",
        "prix" => 122,
        "nb" => 29,
        "categorie" => "carte_mere",
        "archive" => 0,
        "quantite" => 283,
        'subdata' => [
            'Socket_chipset' => 'ohLongJonhson',
            'format' => 'leBonDemande'
        ]
    ],
    [
        "nom" => "lod-896",
        "marque" => "energyStar",
        "prix" => 140,
        "nb" => 50,
        "categorie" => "disque_dur",
        "archive" => 1,
        "quantite" => 20,
        'subdata' => [
            'SSD' => 0,
            'capacite' => 1000
        ]
    ],
    [
        "nom" => "pl-59d",
        "marque" => "ienovo",
        "prix" => 1220,
        "nb" => 20,
        "categorie" => "processeur",
        "archive" => 0,
        "quantite" => 200,
        'subdata' => [
            'frequenceCPU' => 1.35,
            'nombre_de_coeurs' => 5,
            'chipset_compatible' => 'chipset2'
        ]
    ],
];
// $param = str_shuffle("bùmqdfsmdfl25");
// $nom = null;


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

    $id = $connection->lastInsertId();
    // insertion dans la table spécifique
    switch ($composant['categorie']) {
        case 'processeur':
            $subStatement = $connection->prepare('INSERT INTO processeur VALUES (:id, :frequenceCPU, :nombre_de_coeurs, :chipset_compatible)');
            $subStatement->execute([
                ':id' => $id,
                ':frequenceCPU' => $composant['subdata']['frequenceCPU'],
                ':nombre_de_coeurs' => $composant['subdata']['nombre_de_coeurs'],
                ':chipset_compatible' => $composant['subdata']['chipset_compatible']
            ]);
            break;

        case 'alimentation':
            $subStatement = $connection->prepare('INSERT INTO alimentation VALUES (:id, :puissance)');
            $subStatement->execute([
                ':id' => $id,
                ':puissance' => $composant['subdata']['puissance'],
            ]);
            break;

        case 'carte_graphique':
            $subStatement = $connection->prepare('INSERT INTO carte_graphique VALUES (:id, :chipset, :memoire)');
            $subStatement->execute([
                ':id' => $id,
                ':chipset' => $composant['subdata']['chipset'],
                ':memoire' => $composant['subdata']['memoire'],
            ]);
            break;

        case 'memoire_vive':
            $subStatement = $connection->prepare('INSERT INTO memoire_vive VALUES (:id, :capacite, :type_frequence_norme_memoire, :nombre_de_barettes)');
            $subStatement->execute([
                ':id' => $id,
                ':capacite' => $composant['subdata']['capacite'],
                ':type_frequence_norme_memoire' => $composant['subdata']['type_frequence_norme_memoire'],
                ':nombre_de_barettes' => $composant['subdata']['nombre_de_barettes'],
            ]);
            break;

        case 'ecran':
            $subStatement = $connection->prepare('INSERT INTO ecran VALUES (:id, :Taille_de_la_diagonale)');
            $subStatement->execute([
                ':id' => $id,
                ':Taille_de_la_diagonale' => $composant['subdata']['Taille_de_la_diagonale']
            ]);
            break;

        case 'souris':
            $subStatement = $connection->prepare('INSERT INTO souris VALUES (:id, :filaire, :nombre_de_touche)');
            $subStatement->execute([
                ':id' => $id,
                ':filaire' => $composant['subdata']['filaire'],
                ':nombre_de_touche' => $composant['subdata']['nombre_de_touche'],
            ]);
            break;

        case 'clavier':
            $subStatement = $connection->prepare('INSERT INTO clavier VALUES (:id, :sans_fil, :paveNumerique, :typeTouche)');
            $subStatement->execute([
                ':id' => $id,
                ':sans_fil' => $composant['subdata']['sans_fil'],
                ':paveNumerique' => $composant['subdata']['paveNumerique'],
                ':typeTouche' => $composant['subdata']['typeTouche'],
            ]);
            break;

        case 'carte_mere':
            $subStatement = $connection->prepare('INSERT INTO carte_mere VALUES (:id, :Socket_chipset, :format)');
            $subStatement->execute([
                ':id' => $id,
                ':Socket_chipset' => $composant['subdata']['Socket_chipset'],
                ':format' => $composant['subdata']['format'],
            ]);
            break;

        case 'disque_dur':
            $subStatement = $connection->prepare('INSERT INTO disque_dur VALUES (:id, :SSD, :capacite)');
            $subStatement->execute([
                ':id' => $id,

                ':SSD' => $composant['subdata']['SSD'],
                ':capacite' => $composant['subdata']['capacite'],
            ]);
            break;
    }
}
