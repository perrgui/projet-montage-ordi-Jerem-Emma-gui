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
