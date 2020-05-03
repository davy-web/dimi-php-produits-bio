<?php
include '../config.php';
$title_page = "Nos valeurs - Produits Bio";
$title_header = "Nos valeurs";
$chemin_page = "../";
$result = $pdo->prepare('SELECT * FROM davy_valeurs WHERE id = :id');
$result->execute(array(
    'id' => 1
));
$produit = $result->fetch(PDO::FETCH_ASSOC);
include '../header2.php';
?>

        <!-- Nos valeurs -->
        <div class="container my-5">
            <?php echo $produit['contenu']; ?>
        </div>

<?php
include '../footer.php';
?>