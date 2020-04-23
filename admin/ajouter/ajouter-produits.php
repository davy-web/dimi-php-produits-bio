<?php
$error = "";

if (isset($_POST['enregistrer'])) {
    if (!empty($_POST['nom'])) {
        $result = $pdo->prepare('INSERT INTO davy_produits (nom, photo, description, prix, categorie, origine, date, poids) VALUES (:nom, :photo, :description, :prix, :categorie, :origine, :date, :poids)');
        $result->execute(array(
            'nom' => $_POST['nom'],
            'photo' => $_POST['photo'],
            'description' => $_POST['description'],
            'prix' => $_POST['prix'],
            'categorie' => $_POST['categorie'],
            'origine' => $_POST['origine'],
            'date' => $_POST['date'],
            'poids' => $_POST['poids']
        ));
        $error = "Le produit " . $_POST['nom'] . " a été Enregister !";
    }
    else {
        $error = "Veuillez remplir tous les champs";
    }
}
?>

        <div class="container my-5">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-8">
                        <label for="nom" class="size_m color_green">Nom du produit</label>
                        <input id="nom" class="input border_input" type="text" name="nom"><br><br>
                        <label for="photo" class="size_m color_green">Le lien de la photo</label>
                        <input id="photo" class="input border_input" type="text" name="photo"><br><br>
                        <label for="description" class="size_m color_green">Description</label>
                        <textarea id="description" tabindex="5" rows="9" class="input border_input" name="description"></textarea><br>
                    </div>
                    <div class="col-md-4">
                        <label for="prix" class="size_m color_green">Prix</label>
                        <input id="prix" class="input border_input" type="number" step="0.01" name="prix"><br><br>
                        <label for="categorie" class="size_m color_green">Categorie</label>
                        <input id="categorie" class="input border_input" type="text" name="categorie"><br><br>
                        <label for="origine" class="size_m color_green">Origine</label>
                        <input id="origine" class="input border_input" type="text" name="origine"><br><br>
                        <label for="date" class="size_m color_green">Date de péremption</label>
                        <input id="date" class="input border_input" type="date" name="date"><br><br>
                        <label for="number" class="size_m color_green">Poids</label>
                        <input id="number" class="input border_input" type="number" step="0.01" name="poids"><br>
                    </div>
                </div>
                <br><br>
                <input type="submit" name="enregistrer" value="Enregistrer" class="btn bouton_green color_white">
                <p class="color_red size_s py-5"><?php echo($error); ?></p>
            </form>
        </div>