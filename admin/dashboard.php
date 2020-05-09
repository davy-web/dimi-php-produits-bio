<?php
$error = "";
$chemin_page = "../";
include '../config.php';

// Nombre Produits
$result3 = $pdo->query("SELECT count(id) AS total FROM davy_produits");
$nb_produits = $result3->fetch(PDO::FETCH_ASSOC);
$nb_total_produits = $nb_produits['total'];

// Nombre messages
$result4 = $pdo->query("SELECT count(id) AS total FROM davy_messages");
$nb_messages = $result4->fetch(PDO::FETCH_ASSOC);
$nb_total_messages = $nb_messages['total'];
?>

                    <div class="container my-5">
                        <span>Nombre de produits : <?php echo $nb_total_produits; ?></span>
                        <br>
                        <span>Nombre de messages : <?php echo $nb_total_messages; ?> </span>
                        <a title="Bouton Messages" class="color_green" href="<?php echo $chemin_page; ?>messages"> Voir</a>
                    </div>