<?php
include '../config.php';
$title_page = "Produits - Produits Bio";
$title_header = "Nos Produits";
$chemin_page = "../";
include '../header2.php';
$error = "";

// Compte visite
nb_visit('page_produits', $pdo);

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

// Rechercher
function find_davy($str1, $str2) {
    $i = 0;
    $j = 0;
    
    while ($i < strlen($str1)) {
        if (($j < strlen($str2)) && ($str1[$i] == $str2[$j])) {
            $j++;
        }
        else {
            $j = 0;
        }
        if ($j == strlen($str2)) {
            return 1;
        }
        $i++;
    }
    return 0;
}
?>

        <!-- Nos produits -->
        <div class="container mt-5">
            <p class="text-center">Et quadam quadam per incursare sollicite repperisset finitimis bellis sollicite ordinatus ferocissimas e usquam repperisset incessunt per explorabat moventem finitimis.</p>
        </div>

        <!-- Rechercher -->
        <div class="container mt-5">
            <form method="POST" action="">
                <div class="row text-center">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <input type="text" placeholder="Rechercher un produit" id="rechercher" name="mot_rechercher" class="input border_input"><br><br>
                        <input type="submit" name="rechercher" value="Rechercher" class="btn bouton_green color_white"><br>
                        <p class="color_red size_s"><?php echo $error; ?></p>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </form>
        </div>

        <!-- Produits -->
        <div class="container my-5">
            <div class="row my-5">
                
                <?php
                $query_produits = "SELECT * FROM davy_produits ORDER BY id DESC LIMIT " . $premiere_produit . ", " . $produit_par_page;

                // Afficher produits rechercher
                if (isset($_POST['rechercher'])) {
                    if (!empty($_POST['mot_rechercher'])) {
                        $result3 = $pdo->query('SELECT * FROM davy_produits');
                        while ($produit3 = $result3->fetch(PDO::FETCH_ASSOC)) {
                            if ((find_davy($produit3["nom"], $_POST['mot_rechercher']) == 1) || (find_davy($produit3["description"], $_POST['mot_rechercher']) == 1) || (find_davy($produit3["categorie"], $_POST['mot_rechercher']) == 1) || (find_davy($produit3["origine"], $_POST['mot_rechercher']) == 1)) {
                ?>
                
                <div class="col-lg-4 text-center my-5">
                    <a title="Voir Produit" href="../produit/index.php?id=<?php echo $produit3["id"]; ?>" class="color_black">
                        <img src="<?php echo $produit3["photo"]; ?>" alt="<?php echo $produit3["nom"]; ?>" class="img-fluid rounded-circle">
                        <h2 class="font_hotel"><?php echo $produit3["nom"]; ?></h2>
                    </a>
                    <p><?php echo $produit3["prix"]; ?> €</p>
                </div>
                
                <?php
                            }
                        }
                    }
                    else {
                        $error = "Veuillez remplir le champs";
                    }
                }
                
                // Afficher produits SANS rechercher
                else {
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
                }
                ?>
                
            </div>
        </div>

        <!-- Pagination -->
        <div class="text-center my-5">
            
            <?php
            for ($i = 1; $i <= $nb_pages; $i++) {
                echo '<a class="btn bouton_green color_white mx-1 px-3 py-1" href="?page=' . $i . '">' . $i . '</a>';
            }
            ?>
        
        </div>

<?php
include '../footer.php';
?>