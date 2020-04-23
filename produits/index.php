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
            while($produit = $result->fetch(PDO::FETCH_ASSOC)){
                echo '
                <div class="col-lg-4 text-center my-5">';
                echo '
                    <img src="' . $produit["photo"] . '" alt="produits bio" class="img-fluid rounded-circle">';
                echo '
                    <h2 class="font_hotel">' . $produit["nom"] . '</h2>';
                echo '
                    <p>' . $produit["prix"] . ' €</p>';
                echo '<a href="../produit/index.php?id=' . $produit['id'] . '" class="color_green">Voir</a>';
                echo '
                </div>';
            }?></div>
        </div>

<?php
include '../footer.php';
?>