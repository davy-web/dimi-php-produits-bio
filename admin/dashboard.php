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
                        <div class="row">
                            <div class="col bg_grey mr-3 py-5 rounded text-center">
                                <p>Nombre de produits</p>
                                <p class="size_l"><?php echo $nb_total_produits; ?></p>
                            </div>
                            <div class="col bg_grey ml-3 py-5 rounded text-center">
                                <p>Nombre de messages</p>
                                <p class="size_l"><?php echo $nb_total_messages; ?></p>
                            </div>
                        </div>
                        <div class="row rounded bg_grey mt-5 py-5 text-center">
                            <div class="col-12 pb-5">
                                <p class="font_hotel size_l color_green">Nombre de visite</p>
                            </div>
                            <div class="col text-center">
                                <p>Page Accueil</p>
                                <p class="size_l"><?php echo $nb_visit['page_accueil']; ?></p>
                            </div>
                            <div class="col text-center">
                                <p>Page Produits</p>
                                <p class="size_l"><?php echo $nb_visit['page_produits']; ?></p>
                            </div>
                            <div class="col text-center">
                                <p>Page Contact</p>
                                <p class="size_l"><?php echo $nb_visit['page_contact']; ?></p>
                            </div>
                            <div class="col text-center">
                                <p>Page Nos valeurs</p>
                                <p class="size_l"><?php echo $nb_visit['page_valeurs']; ?></p>
                            </div>
                        </div>
                    </div>