<?php
include '../../config.php';
$title_header = "Modifier";
$chemin_page = "../";
if(!empty($_GET['id'])) {
    $result = $pdo->prepare('SELECT * FROM davy_produits WHERE id = :id');
    $result->execute(array(
        'id' => $_GET['id']
    ));
    $produit = $result->fetch(PDO::FETCH_ASSOC);
    $title_header = "Modifier - " . $produit["nom"];
}
include '../header-admin.php';
?>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include 'modifier-produits.php';
    }
}
?>

<?php
include '../footer-admin.php';
?>