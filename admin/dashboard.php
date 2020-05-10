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

// Nombre visites
$result5 = $pdo->query("SELECT * FROM davy_dashboard");
$nb_visit = $result5->fetch(PDO::FETCH_ASSOC);
?>

                    <div class="container my-5">
                        <span>Nombre de produits : <?php echo $nb_total_produits; ?></span>
                        <br>
                        <span>Nombre de messages : <?php echo $nb_total_messages; ?> </span>
                        <br>
                        <span>Nombre de visite à la page Accueil : <?php echo $nb_visit['page_accueil']; ?> </span>
                        <br>
                        <span>Nombre de visite à la page Produits : <?php echo $nb_visit['page_produits']; ?> </span>
                        <br>
                        <span>Nombre de visite à la page Contact : <?php echo $nb_visit['page_contact']; ?> </span>
                        <br>
                        <span>Nombre de visite à la page Nos valeurs : <?php echo $nb_visit['page_valeurs']; ?> </span>
                    </div>