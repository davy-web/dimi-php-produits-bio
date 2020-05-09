<?php
include '../config.php';
$title_page = "Produits - Produits Bio";
$title_header = "Nos Produits";
$chemin_page = "../";
include '../header2.php';

// Pagination
$produit_par_page = 12;
$result2 = $pdo->query("SELECT count(id) AS total FROM davy_produits");
$nb_produits = $result2->fetch(PDO::FETCH_ASSOC);
$nb_total_produits = $nb_produits['total'];
$nb_pages = ceil($nb_total_produits / $produit_par_page);

if (isset($_GET['page'])) {
    $page_actuelle = $_GET['page'];
    if ($page_actuelle > $nb_pages) {
        $page_actuelle = $nb_pages;
    }
}
else {
    $page_actuelle = 1;
}
$premiere_produit = ($page_actuelle - 1) * $produit_par_page;
?>

        <!-- Nos produits -->
        <div class="container mt-5">
            <p class="text-center">Et quadam quadam per incursare sollicite repperisset finitimis bellis sollicite ordinatus ferocissimas e usquam repperisset incessunt per explorabat moventem finitimis.</p>
        </div>

        <!-- Produits -->
        <div class="container my-5">
            <div class="row my-5">
                
                <?php
                $query_produits = "SELECT * FROM davy_produits ORDER BY id DESC LIMIT " . $premiere_produit . ", " . $produit_par_page;
                $result = $pdo->query($query_produits);
                while ($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                
                <div class="col-lg-4 text-center my-5">
                    <a title="Voir Produit" href="../produit/index.php?id=<?php echo $produit["id"]; ?>" class="color_black">
                        <img src="<?php echo $produit["photo"]; ?>" alt="<?php echo $produit["nom"]; ?>" class="img-fluid rounded-circle">
                        <h2 class="font_hotel"><?php echo $produit["nom"]; ?></h2>
                    </a>
                    <p><?php echo $produit["prix"]; ?> €</p>
                </div>
                
                <?php
                }
                ?>
                
            </div>
        </div>

        <!-- Pagination -->
        <div class="text-center my-5">
            
            <?php
            for ($i = 1; $i <= $nb_pages; $i++) {
                echo '<a class="btn bouton_green color_white mx-2 p-3" href="?page=' . $i . '">' . $i . '</a>';
            }
            ?>
        
        </div>

<?php
include '../footer.php';
?>