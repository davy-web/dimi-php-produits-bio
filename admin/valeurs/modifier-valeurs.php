<?php
$error = "";
if (isset($_POST['enregistrer'])) {
    $result = $pdo->prepare('UPDATE davy_valeurs SET contenu=:contenu WHERE id = :id');
    $result->execute(array(
        'id' => 1,
        'contenu' => $_POST['mon_editeur']
    ));
    $error = "Enregistrer !";
}
?>

                    <div class="container my-5">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col">
                                    <label for="mon_editeur" class="size_m color_green">Contenu</label>
                                    
                                    <!-- Editeur WYSIWYG -->
                                    <textarea id="mon_editeur" tabindex="5" rows="9" name="mon_editeur">
                                        <?php echo $produit['contenu']; ?>
                                    
                                    </textarea><br>
                                </div>
                            </div>
                            <br><br>
                            <input type="submit" name="enregistrer" value="Enregistrer" class="btn bouton_green color_white">
                            <p class="color_green size_s py-5"><?php echo($error); ?></p>
                        </form>
                    </div>