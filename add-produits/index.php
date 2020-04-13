<?php
$error = "";

if (isset($_POST['enregistrer'])) {
    if (!empty($_POST['nom'])) {
        $pdo = new PDO('mysql:host=localhost;dbname=davy_admin', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
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
        $error = "Le produit $_POST[nom] a été Enregister !";
    }
    else {
        $error = "Veuillez remplir tous les champs";
    }
}
?>
        <form method="post" action="">
            <p>Nom du produit</p>
            <input type="text" name="nom">
            <p>Le lien de la photo</p>
            <input type="text" name="photo">
            <p>Description</p>
            <input type="text" name="description">
            <p>Prix</p>
            <input type="number" name="prix">
            <p>Categorie</p>
            <input type="text" name="categorie">
            <p>Origine</p>
            <input type="text" name="origine">
            <p>Date de péremption</p>
            <input type="date" name="date">
            <p>Poids</p>
            <input type="number" name="poids">
            <br><br><br>
            <input type="submit" name="enregistrer" value="Enregistrer">
            <p><?php echo($error); ?></p>
        </form>