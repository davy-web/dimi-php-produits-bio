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

                    <div class="container py-5">
                        <div class="row">
                            
                            <!-- Nombre de produits -->
                            <div class="col-lg">
                                <div class="row haut_vert_1 text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold color_white size_m">NOMBRE</span><br>
                                        <span class="w-100 color_white">de produits</span>
                                    </div>
                                </div>
                                <div class="row milieu_vert text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold size_l"><?php echo $nb_total_produits; ?></span><br>
                                        <span class="w-100">Produits</span>
                                    </div>
                                </div>
                                <div class="row bas_vert"></div>
                            </div>
                            
                            <!-- Nombre de messages -->
                            <div class="col-lg">
                                <div class="row haut_vert_2 text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold color_white size_m">NOMBRE</span><br>
                                        <span class="w-100 color_white">de messages</span>
                                    </div>
                                </div>
                                <div class="row milieu_vert text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold size_l"><?php echo $nb_total_messages; ?></span><br>
                                        <span class="w-100">Messages</span>
                                    </div>
                                </div>
                                <div class="row bas_vert"></div>
                            </div>
                            
                            <!-- Nombre de visites Accueil -->
                            <div class="col-lg">
                                <div class="row haut_vert_3 text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold color_white size_m">PAGE</span><br>
                                        <span class="w-100 color_white">d'Accueil</span>
                                    </div>
                                </div>
                                <div class="row milieu_vert text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold size_l"><?php echo $nb_visit['page_accueil']; ?></span><br>
                                        <span class="w-100">Visites</span>
                                    </div>
                                </div>
                                <div class="row bas_vert"></div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <!-- Nombre de visites Produits -->
                            <div class="col-lg">
                                <div class="row haut_vert_1 text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold color_white size_m">PAGE</span><br>
                                        <span class="w-100 color_white">de Produits</span>
                                    </div>
                                </div>
                                <div class="row milieu_vert text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold size_l"><?php echo $nb_visit['page_produits']; ?></span><br>
                                        <span class="w-100">Visites</span>
                                    </div>
                                </div>
                                <div class="row bas_vert"></div>
                            </div>
                            
                            <!-- Nombre de visites Contact -->
                            <div class="col-lg">
                                <div class="row haut_vert_2 text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold color_white size_m">PAGE</span><br>
                                        <span class="w-100 color_white">de Contact</span>
                                    </div>
                                </div>
                                <div class="row milieu_vert text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold size_l"><?php echo $nb_visit['page_contact']; ?></span><br>
                                        <span class="w-100">Visites</span>
                                    </div>
                                </div>
                                <div class="row bas_vert"></div>
                            </div>
                            
                            <!-- Nombre de visites Valeurs -->
                            <div class="col-lg">
                                <div class="row haut_vert_3 text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold color_white size_m">PAGE</span><br>
                                        <span class="w-100 color_white">Nos valeurs</span>
                                    </div>
                                </div>
                                <div class="row milieu_vert text-center d-flex align-items-center justify-content-center">
                                    <div>
                                        <span class="w-100 font-weight-bold size_l"><?php echo $nb_visit['page_valeurs']; ?></span><br>
                                        <span class="w-100">Visites</span>
                                    </div>
                                </div>
                                <div class="row bas_vert"></div>
                            </div>
                        </div>
                    </div>