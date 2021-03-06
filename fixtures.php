<?php
include 'includes/config.inc.php';

$employes = [
    [
        "nom" => "manson",
        "prenom" => "marylin",
        "identifiant" => "LeConcepteur",
        "mot_de_passe" => "donPabloEscobar"
    ],

    [
        "nom" => "daniel",
        "prenom" => "jacques",
        "identifiant" => "LeMonteur",
        "mot_de_passe" => "donVitoCorleone"
    ],
];

// j'ai rajouté une pièce de plus pour chacune des catégories.
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
            "puissance" => 15.5,
        ]
    ],
    [
        "nom" => "fetr89",
        "marque" => "ienovo",
        "prix" => 12.20,
        "nb" => 10,
        "categorie" => "alimentation",
        "archive" => 0,
        "quantite" => 100,
        'subdata' => [
            "puissance" => 18.5,
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
            'memoire' => '32',
        ]
    ],
    [
        "nom" => "app8-5",
        "marque" => "apple",
        "prix" => 14000,
        "nb" => 6,
        "categorie" => "carte_graphique",
        "archive" => 1,
        "quantite" => 170,
        'subdata' => [
            'chipset' => 'sgw-845',
            'memoire' => '64',
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
        "nom" => "a-te583",
        "marque" => "Nvidia",
        "prix" => 420,
        "nb" => 150,
        "categorie" => "memoire_vive",
        "archive" => 0,
        "quantite" => 200,
        'subdata' => [
            'capacite' => '32',
            'type_frequence_norme_memoire' => 'dr546',
            'nombre_de_barettes' => 2
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
        "nom" => "dv789",
        "marque" => "microsoft",
        "prix" => 200,
        "nb" => 12,
        "categorie" => "ecran",
        "archive" => 0,
        "quantite" => 30,
        'subdata' => [
            'Taille_de_la_diagonale' => '20'
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
        "nom" => "g422",
        "marque" => "razor",
        "prix" => 110,
        "nb" => 78,
        "categorie" => "souris",
        "archive" => 0,
        "quantite" => 1400,
        'subdata' => [
            'filaire' => 0,
            'nombre_de_touche' => 8,
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
            'sans_fil' => 0,
            'paveNumerique' => 1,
            'typeTouche' => "mecanique",
        ]
    ],
    [
        "nom" => "gjk-89",
        "marque" => "logitech",
        "prix" => 230,
        "nb" => 23,
        "categorie" => "clavier",
        "archive" => 0,
        "quantite" => 400,
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
        "nom" => "c3po-2",
        "marque" => "HP",
        "prix" => 1300,
        "nb" => 40,
        "categorie" => "processeur",
        "archive" => 0,
        "quantite" => 120,
        'subdata' => [
            'frequenceCPU' => 3.75,
            'nombre_de_coeurs' => 7,
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
        "nom" => "r3d3",
        "marque" => "Asus",
        "prix" => 142,
        "nb" => 64,
        "categorie" => "carte_mere",
        "archive" => 0,
        "quantite" => 45,
        'subdata' => [
            'Socket_chipset' => 'ohTresLongJonhson',
            'format' => 'leBonDemandeBienSur'
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
        "nom" => "plot-2042",
        "marque" => "energyStar",
        "prix" => 220,
        "nb" => 120,
        "categorie" => "disque_dur",
        "archive" => 1,
        "quantite" => 250,
        'subdata' => [
            'SSD' => 1,
            'capacite' => 500
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

$modeles = [
    0 =>  [
        "nom" => "Dell",
        "quantite" => 5,
        "dateajout" => "2019-02-17",
        "nb" => 15,
        "estportable" => 0,
        "commentaires" => [
            [
                "Id_Employe" => "1",
                "datecommentaire" => "2022-02-23",
                "contenu" => "bonjour Jacques, je me permet de t'envoyer ce message à propos du modèle Plantagenet-2150,
                j'ai ce matin cherché à en monter un, mais je tenais a relever un problème. Les composants rentrent à 
                peine dans la tour, j'ai donc peur sur le long terme que les performances ainsi que le système de refroidissement
                puissent en pâtir "
            ],
            [
                "Id_Employe" => "2",
                "datecommentaire" => "2022-08-03",
                "contenu" => "bonjour marylin, je me permet de t'envoyer ce message à propos du modèle Planhddhcfn,
                j'ai ce matin cherché à en monter un, mais je tenais a relever un problème. Les composants rentrent à 
                peine dans la tour, je dis des bétisses pour remplir ce message qu'il ait l'air d'un truc vraiment sérieux  "
            ],
        ]
    ],

    1 => [
        "nom" => "Apple",
        "quantite" => 20,
        "dateajout" => "2022-02-17",
        "nb" => 250,
        "estportable" => '0',
        "commentaires" => [
            [
                "Id_Employe" => "1",
                "datecommentaire" => "2022-09-07",
                "contenu" => "bonjour jacques, je me permet de t'envoyer ce message à propos du modèle Pln-897,
                j'ai ce matin cherché à en monter un, mais je tenais a relever un problème. Les composants rentrent à 
                peine dans la tour, je dis des bétisses pour remplir ce message qu'il ait l'air d'un truc vraiment sérieux  "
            ],
            [
                "Id_Employe" => "2",
                "datecommentaire" => "2022-02-12",
                "contenu" => "bonjour marylin, je me permet de t'envoyer ce message à propos du modèle Pn-cd5,
                j'ai ce matin cherché à en monter un,  je tenais a te féliciter face. Les composants rentrent à 
                peine dans la tour, je dis des bétisses pour remplir ce message qu'il ait l'air d'un truc vraiment sérieux  "
            ],
        ],
    ],

    2 => [
        "nom" => "Microsoft",
        "quantite" => 7,
        "dateajout" => "2021-04-24",
        "nb" => 12,
        "estportable" => 0,
    ],

    3 => [
        "nom" => "Toshiba",
        "quantite" => 150,
        "dateajout" => "2019-05-03",
        "nb" => 50,
        "estportable" => 1,
    ],

    4 => [
        "nom" => "Sony",
        "quantite" => 300,
        "dateajout" => "2018-06-08",
        "nb" => 100,
        "estportable" =>  0,
    ],

    5 => [
        "nom" => "HP",
        "quantite" => 200,
        "dateajout" => "2022-01-02",
        "nb" => 46,
        "estportable" =>  1,
    ],

    6 => [
        "nom" => "Asus",
        "quantite" => 483,
        "dateajout" => "2021-11-16",
        "nb" => 95,
        "estportable" => 1,
    ],

    7 => [
        "nom" => "Acer",
        "quantite" => 356,
        "dateajout" => "2018-12-04",
        "nb" => 90,
        "estportable" =>  1,
    ],

    8 => [
        "nom" => "Fujitsu",
        "quantite" => 20,
        "dateajout" => "2021-05-14",
        "nb" => 256,
        "estportable" => 0,
    ],

    9 => [
        "nom" => "Lenovo",
        "quantite" => 263,
        "dateajout" => "2021-06-12",
        "nb" => 58,
        "estportable" => 0,
    ],

    10 => [
        "nom" => "LG",
        "quantite" => 346,
        "dateajout" => "2020-10-02",
        "nb" => 632,
        "estportable" => 0,
    ],

];

// $param = str_shuffle("bùmqdfsmdfl25");
// $nom = null;

$connection->exec("SET FOREIGN_KEY_CHECKS = 0;TRUNCATE composant;TRUNCATE processeur;TRUNCATE alimentation;TRUNCATE carte_graphique;TRUNCATE memoire_vive;TRUNCATE ecran_;TRUNCATE souris;TRUNCATE clavier;TRUNCATE carte_mere;TRUNCATE disque_dur;TRUNCATE employe;TRUNCATE commentaires;TRUNCATE modele;SET FOREIGN_KEY_CHECKS = 1;");

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
            $subStatement = $connection->prepare('INSERT INTO ecran_ VALUES (:id, :Taille_de_la_diagonale)');
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


$statement = $connection->prepare('INSERT INTO employe (nom ,prenom, identifiant , mot_de_passe ) VALUES (:nom, :prenom , :identifiant , :mot_de_passe )');

foreach ($employes as $employe) {
    $statement->execute([
        ':nom' => $employe['nom'],
        ':prenom' => $employe['prenom'],
        ':identifiant' => $employe['identifiant'],
        ':mot_de_passe' => $employe['mot_de_passe'],
    ]);
}


// Requête pour Modèles (sub-statement??)
$statement = $connection->prepare('INSERT INTO modele (nom , quantite, nb, dateajout , estportable ) VALUES (:nom, :quantite, :nb, :dateajout, :estportable )');

foreach ($modeles as $modele) {
    $statement->execute([
        ':nom'         => $modele['nom'],
        ':quantite'    => $modele['quantite'],
        ':dateajout'   => $modele['dateajout'],
        ':nb'          => $modele['nb'],
        ':estportable' => $modele['estportable'],
    ]);

    $id = $connection->lastInsertId();

    if (!empty($modele['commentaires'])) {
        $statementCommentaire = $connection->prepare('INSERT INTO commentaires (datecommentaire , contenu , Id_Employe, Id_Modele ) VALUES (:datecommentaire, :contenu, :Id_Employe ,:Id_Modele)');

        foreach ($modele['commentaires'] as $commentaire) {
            $statementCommentaire->execute([
                ':datecommentaire' => $commentaire['datecommentaire'],
                ':contenu' => $commentaire['contenu'],
                ':Id_Employe' => $commentaire['Id_Employe'],
                ':Id_Modele' => $id,
            ]);
        }
    }
}
