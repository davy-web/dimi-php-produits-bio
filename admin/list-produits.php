<?php
$error = "";
$chemin_page = "../";
include '../config.php';

// Supprimer Produits
if(!empty($_GET['delete'])) {
    $result2 = $pdo->prepare('DELETE FROM davy_produits WHERE id = :id');
    $result2->execute(array(
        'id' => $_GET['delete']
    ));
    header('Location: .');
}
?>

                    <div class="container my-5 color_white">
                        <div class="row text-center p-1 color_green">
                            <p class="col-sm size_s bg_grey m-0 p-3">Nom</p>
                            <p class="col-sm size_s bg_grey2 m-0 p-3">Categorie</p>
                            <p class="col-sm size_s bg_grey m-0 p-3">Poids</p>
                            <p class="col-sm size_s bg_grey2 m-0 p-3">Prix</p>
                            <p class="col-sm size_s bg_grey m-0 p-3">Modifier</p>
                            <p class="col-sm size_s bg_grey2 m-0 p-3">Supprimer</p>
                        </div>
                        
                        <?php
                        // Affichier Produits
                        $result = $pdo->query("SELECT * FROM davy_produits");
                        while ($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        
                        <div class="row text-center p-1">
                            <p class="col-sm size_s bg_grey color_black m-0 p-3"><?php echo $produit["nom"]; ?></p>
                            <p class="col-sm size_s bg_grey2 color_black m-0 p-3"><?php echo $produit["categorie"]; ?></p>
                            <p class="col-sm size_s bg_grey color_black m-0 p-3"><?php echo $produit["poids"]; ?></p>
                            <p class="col-sm size_s bg_grey2 color_black m-0 p-3"><?php echo $produit["prix"]; ?></p>
                            <a href="modifier/index.php?id=<?php echo $produit['id']; ?>" class="color_black col-sm size_s bg_grey m-0 p-3">Modifier</a>
                            <a href="?delete=<?php echo $produit["id"]; ?>" class="color_black col-sm size_s bg_grey2 m-0 p-3">Supprimer</a>
                        </div>
                        
                        <?php
                        }
                        ?>
                        
                    </div>