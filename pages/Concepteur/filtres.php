<?php


$sql = 'SELECT * FROM composant WHERE ';
$criteria = [];
if ($enStock) {
    $criteria[] = 'composant.stock > 0';
}
if ($marque) {
    $criteria[] = 'composant.marque LIKE %' . $marque . '%';
}
if ($marque) {
    $criteria[] = 'composant.marque LIKE %' . $marque . '%';
}
if ($marque) {
    $criteria[] = 'composant.marque LIKE %' . $marque . '%';
}
if ($marque) {
    $criteria[] = 'composant.marque LIKE %' . $marque . '%';
}
if ($marque) {
    $criteria[] = 'composant.marque LIKE %' . $marque . '%';
}
$mergedCriteria = implode(' AND ', $criteria);

$sql .= $mergedCriteria;

?>
// filtres models

<?php

"SELECT * FROM `modeles` 
  LEFT JOIN composant ON composant.Id_Modeles = modeles.Id_Modeles 
  WHERE categorie;
 WHERE prix;
 WHERE commentaire ";

?>
<?php

"SELECT * FROM `commentaires` 
  LEFT JOIN composant ON composant.Id_Modeles = modeles.Id_Modeles 
  WHERE categorie;
 WHERE prix;
 WHERE commentaire ";

?>