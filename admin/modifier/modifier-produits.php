<?php
$error = "";

if (!empty($_GET['id'])) {
    if (isset($_POST['enregistrer'])) {
        if (!empty($_POST['nom'])) {
            // Modifier infos produits
            $result = $pdo->prepare('UPDATE davy_produits SET nom=:nom, photo=:photo, description=:description, prix=:prix, categorie=:categorie, origine=:origine, date=:date, poids=:poids WHERE id = :id');
            $result->execute(array(
                'id' => $_GET['id'],
                'nom' => $_POST['nom'],
                'photo' => $_POST['photo'],
                'description' => $_POST['description'],
                'prix' => $_POST['prix'],
                'categorie' => $_POST['categorie'],
                'origine' => $_POST['origine'],
                'date' => $_POST['date'],
                'poids' => $_POST['poids']
            ));
            $error = "Le produit " . $_POST['nom'] . " a été Modifier !";
        }
        else {
            $error = "Veuillez remplir tous les champs";
        }
    }
}
?>

        <div class="container my-5">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-8">
                        <label for="nom" class="size_m color_green">Nom du produit</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['nom'];} ?>" id="nom" class="input border_input" type="text" name="nom"><br><br>
                        <label for="photo" class="size_m color_green">Le lien de la photo</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['photo'];} ?>" id="photo" class="input border_input" type="text" name="photo"><br><br>
                        <label for="description" class="size_m color_green">Description</label>
                        <textarea id="description" tabindex="5" rows="9" class="input border_input" name="description"><?php if(!empty($_GET['id'])) {echo $produit['description'];} ?></textarea><br>
                    </div>
                    <div class="col-md-4">
                        <label for="prix" class="size_m color_green">Prix</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['prix'];} ?>" id="prix" class="input border_input" type="number" step="0.01" name="prix"><br><br>
                        <label for="categorie" class="size_m color_green">Categorie</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['categorie'];} ?>" id="categorie" class="input border_input" type="text" name="categorie"><br><br>
                        <label for="origine" class="size_m color_green">Origine</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['origine'];} ?>" id="origine" class="input border_input" type="text" name="origine"><br><br>
                        <label for="date" class="size_m color_green">Date de péremption</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['date'];} ?>" id="date" class="input border_input" type="date" name="date"><br><br>
                        <label for="number" class="size_m color_green">Poids</label>
                        <input value="<?php if(!empty($_GET['id'])) {echo $produit['poids'];} ?>" id="number" class="input border_input" type="number" step="0.01" name="poids"><br>
                    </div>
                </div>
                <br><br>
                <input type="submit" name="enregistrer" value="Enregistrer" class="btn bouton_green color_white">
                <p class="color_red size_s py-5"><?php echo($error); ?></p>
            </form>
        </div>