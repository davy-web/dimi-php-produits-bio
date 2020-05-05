<?php
include '../config.php';
$title_page = "Produits - Produits Bio";
$title_header = "Nos Produits";
$chemin_page = "../";
include '../header2.php';
?>

        <!-- Nos produits -->
        <div class="container mt-5">
            <p class="text-center">Et quadam quadam per incursare sollicite repperisset finitimis bellis sollicite ordinatus ferocissimas e usquam repperisset incessunt per explorabat moventem finitimis.</p>
        </div>

        <!-- Produits -->
        <div class="container my-5">
            <div class="row my-5">
                
                <?php
                $result = $pdo->query("SELECT * FROM davy_produits");
                while ($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                
                <div class="col-lg-4 text-center my-5">
                    <img src="<?php echo $produit["photo"]; ?>" alt="produits bio" class="img-fluid rounded-circle">
                    <h2 class="font_hotel"><?php echo $produit["nom"]; ?></h2>
                    <p><?php echo $produit["prix"]; ?> €</p>
                    <a href="../produit/index.php?id=<?php echo $produit["id"]; ?>" class="color_green">Voir</a>
                </div>
                
                <?php
                }
                ?>
                
            </div>
        </div>

<?php
include '../footer.php';
?>