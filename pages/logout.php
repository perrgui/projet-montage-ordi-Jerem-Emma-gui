<?php
$pageTitle = "Login";

session_start();
session_destroy();

require_once 'includes/header.php';

header('Location: index.php?logout=success');

include 'includes/footer.php';
?>