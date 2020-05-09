<?php
include '../config.php';
$title_header = "Admin";
$chemin_page = "./";
include 'header-admin.php';
?>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include 'dashboard.php';
        include 'list-produits.php';
    }
}
?>

<?php
include 'footer-admin.php';
?>