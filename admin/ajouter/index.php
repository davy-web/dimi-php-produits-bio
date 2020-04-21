<?php
include '../../config.php';
$title_header = "Ajouter";
$chemin_page = "../";
include '../header-admin.php';
?>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include 'ajouter-produits.php';
    }
}
?>

<?php
include '../footer-admin.php';
?>