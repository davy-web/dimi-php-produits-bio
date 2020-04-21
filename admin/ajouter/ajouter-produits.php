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
                        <p class="size_m color_green">Nom du produit</p>
                        <input class="input border_input" type="text" name="nom"><br><br>
                        <p class="size_m color_green">Le lien de la photo</p>
                        <input class="input border_input" type="text" name="photo"><br><br>
                        <p class="size_m color_green">Description</p>
                        <input class="input border_input" type="text" name="description"><br><br>
                    </div>
                    <div class="col-md-4">
                        <p class="size_m color_green">Prix</p>
                        <input class="input border_input" type="number" name="prix"><br><br>
                        <p class="size_m color_green">Categorie</p>
                        <input class="input border_input" type="text" name="categorie"><br><br>
                        <p class="size_m color_green">Origine</p>
                        <input class="input border_input" type="text" name="origine"><br><br>
                        <p class="size_m color_green">Date de péremption</p>
                        <input class="input border_input" type="date" name="date"><br><br>
                        <p class="size_m color_green">Poids</p>
                        <input class="input border_input" type="number" name="poids"><br><br>
                    </div>
                </div>
                <br><br><br>
                <input type="submit" name="enregistrer" value="Enregistrer" class="btn bouton_green color_white">
                <p class="color_red size_s py-5"><?php echo($error); ?></p>
            </form>
        </div>