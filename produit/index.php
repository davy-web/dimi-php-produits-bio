<?php
include '../config.php';
$title_page = "Produit - Produits Bio";
$title_header = "Produit";

if (!empty($_GET['id'])) {
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
                if (!empty($_GET['id'])) {
                    $result = $pdo->prepare('SELECT * FROM davy_produits WHERE id = :id');
                    $result->execute(array(
                        'id' => $_GET['id']
                    ));
                    while ($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                
                <div class="col-md text-center my-5">
                    <img src="<?php echo $produit["photo"]; ?>" alt="<?php echo $produit["nom"]; ?>" class="img-fluid">
                </div>
                <div class="col-md my-5">
                    <h2 class="font_hotel color_green size_l"><?php echo $produit["nom"]; ?></h2>
                    <span class="size_m"><?php echo $produit["description"]; ?></span><br>
                    <span class="size_m color_green">Catégorie : </span>
                    <span class="size_m"><?php echo $produit["categorie"]; ?></span><br>
                    <span class="size_m color_green">Origine : </span>
                    <span class="size_m"><?php echo $produit["origine"]; ?></span><br>
                    <span class="size_m color_green">Poids : </span>
                    <span class="size_m"><?php echo $produit["poids"]; ?> g</span><br><span class="size_m color_green">Date de péremption : </span>
                    <span class="size_m"><?php echo $produit["date"]; ?></span><br>
                    <p class="size_l"><?php echo $produit["prix"]; ?> €</p>
                </div>
                
                <?php
                }}
                ?>
            
            </div>
        </div>

        <!-- Produits similaire -->
        <div class="container mt-5">
            <h3 class="font_hotel text-center size_l">Produits similaire</h3>
        </div>

        <!-- 3 Produits -->
        <div class="container">
            <div class="row my-5">
                
                <?php
                $result = $pdo->query("SELECT * FROM davy_produits WHERE 4 order by rand() LIMIT 3");
                while ($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                
                <div class="col-lg text-center my-5">
                    <a title="Voir Produit" href="index.php?id=<?php echo $produit["id"]; ?>" class="color_black">
                        <img src="<?php echo $produit["photo"]; ?>" alt="<?php echo $produit["nom"]; ?>" class="img-fluid">
                        <h2 class="font_hotel"><?php echo $produit["nom"]; ?></h2>
                    </a>
                    <p><?php echo $produit["prix"]; ?> €</p>
                </div>
                
                <?php
                }
                ?>
                
            </div>
        </div>

<?php
include '../footer.php';
?>