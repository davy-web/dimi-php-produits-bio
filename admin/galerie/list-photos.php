
                    <!-- Photos -->
                    <div class="container my-5">
                        <div class="row">
                            
                            <?php
                            // Afficher photos
                            $result = $pdo->query("SELECT * FROM davy_produits");
                            while ($produit = $result->fetch(PDO::FETCH_ASSOC)) {
                            ?>

                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <img alt="<?php echo $produit["nom"]; ?>" src="<?php echo $produit["photo"]; ?>" class="photo">
                            </div>

                            <?php
                            }
                            ?>
                            
                        </div>
                    </div>