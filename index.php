<?php
include 'config.php';
$title_page = "Accueil - Produits Bio";
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
                $result = $pdo->prepare('SELECT * FROM davy_produits WHERE id = :id');
                $result->execute(array(
                    'id' => $i
                ));
                while($produit = $result->fetch(PDO::FETCH_ASSOC)){
                    $nom = $produit["nom"];
                    $photo = $produit["photo"];
                    $prix = $produit["prix"];
                }
                echo '
                <div class="col-lg text-center my-5">';
                echo '
                    <img src="' . $photo . '" alt="produits bio" class="img-fluid rounded-circle">';
                echo '
                    <h2 class="font_hotel">' . $nom . '</h2>';
                echo '
                    <p>' . $prix . ' €</p>';
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

<?php
include 'footer.php';
?>