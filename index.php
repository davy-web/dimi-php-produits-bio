<?php
include 'config.php';
$title_page = "Accueil - Produits Bio";
$chemin_page = "./";
include 'header.php';
?>

        <!-- Meilleures Ventes -->
        <div class="container mt-5">
            <h1 class="font_hotel text-center">Meilleures Ventes</h1>
            <p class="text-center">Et quadam quadam per incursare sollicite repperisset finitimis bellis sollicite ordinatus ferocissimas e usquam repperisset incessunt per explorabat moventem finitimis.</p>
        </div>

        <!-- 3 Produits -->
        <div class="container my-5">
            <div class="row my-5">
            <?php
            for ($i=1; $i<=3; $i++) {
                $result = $pdo->query("SELECT * FROM davy_produits WHERE 1 order by rand()");
                $produit = $result->fetch(PDO::FETCH_ASSOC);
                echo '
                <div class="col-lg text-center my-5">';
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

        <!-- Fruits Bio -->
        <div class="container-fluid fond_noir_1 pt-5">
            <div class="container card-body">
                <div class="row py-5">
                    <div class="col-sm pt-5">
                        <img src="images/fruits.jpg" alt="fruits bio" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-sm color_white align-self-center pt-5">
                        <h1 class="font_hotel color_green">Fruits Bio</h1>
                        <p>Quid excidat exigue excidat amicitiam ac voluntatibus aut defluat ad sit quidem amicitia quae Hoc.</p>
                        <button type="button" class="btn bouton_green">COMMANDER</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ce qu'en disent nos clients -->
        <div class="container-fluid fond_noir py-5">
            <div class="container">
                <h1 class="font_hotel text-center color_green">Ce qu'en disent nos clients :</h1>
                <p class="text-center color_white">Et quadam quadam per incursare sollicite repperisset finitimis bellis sollicite ordinatus ferocissimas e usquam repperisset incessunt per explorabat moventem finitimis.</p>
            </div>
            <div class="container text-center py-5">
                <div class="row text-center">
                    <div class="col-md py-2">
                        <span class="color_green size_l">4,5/5</span>
                        <p class="color_white size_m">GOOGLE</p>
                    </div>
                    <div class="col-md py-2">
                        <span class="color_green size_l">4,8/5</span>
                        <p class="color_white size_m">FACEBOOK</p>
                    </div>
                    <div class="col-md py-2">
                        <span class="color_green size_l">5/5</span>
                        <p class="color_white size_m">PAGES JAUNES</p>
                    </div>
                    <div class="col-md py-2">
                        <span class="color_green size_l">4,5/5</span>
                        <p class="color_white size_m">APPLI</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Légumes Bio -->
        <div class="container-fluid fond_noir_2 pb-5">
            <div class="container card-body">
                <div class="row py-5">
                    <div class="col-sm color_white align-self-center pb-5">
                        <h1 class="font_hotel color_green">Légumes Bio</h1>
                        <p>Quid excidat exigue excidat amicitiam ac voluntatibus aut defluat ad sit quidem amicitia quae Hoc.</p>
                        <button type="button" class="btn bouton_green">COMMANDER</button>
                    </div>
                    <div class="col-sm align-self-end pb-5">
                        <img src="images/legumes.jpg" alt="légumes bio" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
        </div>

        <!-- Davy Chen -->
        <div class="container my-5">
            <p class="text-center">Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis.</p>
            <h2 class="font_hotel text-center size_l mb_5">Davy Chen</h2>
        </div>

<?php
include 'footer.php';
?>