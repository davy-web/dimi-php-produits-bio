<?php
include '../../config.php';
$title_header = "List Produits";
$chemin_page = "../";
include '../header-admin.php';
?>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include 'list-produits.php';
    }
}
?>

<?php
include '../footer-admin2.php';
?>