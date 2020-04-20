<?php
$error = "";
$chemin_page = "../";
include '../config.php';
?>

        <div class="container my-5 color_white">
            <div class="row text-center p-1 color_green">
                <p class="col-sm size_s fond_noir2 m-0 p-3">Nom</p>
                <p class="col-sm size_s fond_noir m-0 p-3">Categorie</p>
                <p class="col-sm size_s fond_noir2 m-0 p-3">Poids</p>
                <p class="col-sm size_s fond_noir m-0 p-3">Prix</p>
                <p class="col-sm size_s fond_noir2 m-0 p-3">Voir</p>
            </div>
            <?php
            $result = $pdo->query("SELECT * FROM davy_produits");
            while($produit = $result->fetch(PDO::FETCH_ASSOC)){
                echo '
                <div class="row text-center p-1">';
                echo '
                    <p class="col-sm size_s fond_noir2 m-0 p-3">' . $produit["nom"] . '</p>';
                echo '
                    <p class="col-sm size_s fond_noir m-0 p-3">' . $produit["categorie"] . '</p>';
                echo '
                    <p class="col-sm size_s fond_noir2 m-0 p-3">' . $produit["poids"] . ' g</p>';
                echo '
                    <p class="col-sm size_s fond_noir m-0 p-3">' . $produit["prix"] . ' €</p>';
                echo '<a href="../produit/index.php?id=' . $produit['id'] . '" class="color_white col-sm size_s fond_noir2 m-0 p-3">Voir</a>';
                echo '
                </div>';
            }?>
        </div>
