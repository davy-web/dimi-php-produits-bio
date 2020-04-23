<?php
include '../config.php';
$title_page = "Produit - Produits Bio";
$title_header = "Produit";
if(!empty($_GET['id'])) {
    $result = $pdo->prepare('SELECT * FROM davy_produits WHERE id = :id');
    $result->execute(array(
        'id' => $_GET['id']
    ));
    $produit = $result->fetch(PDO::FETCH_ASSOC);
    $title_page = $produit["nom"] . " - Produits Bio";
    $title_header = $produit["nom"];
}
$chemin_page = "../";
include '../header2.php';
?>

        <!-- Produit -->
        <div class="container my-5">
            <div class="row my-5">
            <?php
            if(!empty($_GET['id'])) {
                $result = $pdo->prepare('SELECT * FROM davy_produits WHERE id = :id');
                $result->execute(array(
                    'id' => $_GET['id']
                ));
                while($produit = $result->fetch(PDO::FETCH_ASSOC)){
                    echo '
                    <div class="col-md text-center my-5">';
                    echo '
                        <img src="' . $produit["photo"] . '" alt="produits bio" class="img-fluid rounded-circle">';
                    echo '
                    </div>';
                    echo '
                    <div class="col-md my-5">';
                    echo '
                        <h2 class="font_hotel color_green size_l">' . $produit["nom"] . '</h2>';
                    echo '
                        <span class="size_m">' . $produit["description"] . '</span><br>';
                    echo '
                        <span class="size_m color_green">Catégorie : </span><span class="size_m">' . $produit["categorie"] . '</span><br>';
                    echo '
                        <span class="size_m color_green">Origine : </span><span class="size_m">' . $produit["origine"] . '</span><br>';
                    echo '
                        <span class="size_m color_green">Poids : </span><span class="size_m">' . $produit["poids"] . ' g</span><br>';
                    echo '
                        <span class="size_m color_green">Date de péremption : </span><span class="size_m">' . $produit["date"] . '</span><br>';
                    echo '
                        <p class="size_l">' . $produit["prix"] . ' €</p>';
                    echo '
                    </div>';
                }
            }?></div>
        </div>

        <!-- Produits similaire -->
        <div class="container mt-5">
            <h3 class="font_hotel text-center size_l">Produits similaire</h3>
        </div>

        <!-- 3 Produits -->
        <div class="container">
            <div class="row my-5">
            <?php
            $result = $pdo->query("SELECT * FROM davy_produits WHERE 4 order by rand()");
            while($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '
                <div class="col-lg text-center my-5">';
                echo '
                    <img src="' . $produit["photo"] . '" alt="produits bio" class="img-fluid rounded-circle">';
                echo '
                    <h2 class="font_hotel">' . $produit["nom"] . '</h2>';
                echo '
                    <p>' . $produit["prix"] . ' €</p>';
                echo '<a href="index.php?id=' . $produit['id'] . '" class="color_green">Voir</a>';
                echo '
                </div>';
            }?></div>
        </div>

<?php
include '../footer.php';
?>