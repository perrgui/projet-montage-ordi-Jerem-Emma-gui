<?php
ob_start();
include_once 'includes/autoload.php';
include_once 'includes/config.inc.php';
include_once 'includes/header.php';

$page = 'login';
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}

if ($page == 'pageConcepteur') {
    include_once 'pages/concepteur/' . $page . '.php';
} else {
    include_once 'pages/' . $page . '.php';
}

include_once 'includes/footer.php';
echo ob_get_clean();