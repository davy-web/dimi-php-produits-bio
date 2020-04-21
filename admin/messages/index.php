<?php
include '../../config.php';
$title_header = "Messages";
$chemin_page = "../";
include '../header-admin.php';
?>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include 'list-messages.php';
    }
}
?>

<?php
include '../footer-admin.php';
?>