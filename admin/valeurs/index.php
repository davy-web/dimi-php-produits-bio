<?php
include '../../config.php';
$title_header = "Modifier Nos valeurs";
$chemin_page = "../";
$result = $pdo->prepare('SELECT * FROM davy_valeurs WHERE id = :id');
$result->execute(array(
    'id' => 1
));
$contenu = $result->fetch(PDO::FETCH_ASSOC);
include '../header-admin.php';
?>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include 'modifier-valeurs.php';
    }
}
?>

<?php
include '../footer-admin2.php';
?>