<?php
$bouton_connexion = "Se déconnecter";

if (!isset($_SESSION)) {
    session_start();
}

// Bouton connexion et déconnexion
if (isset($_POST['connexion'])) {
    if (isset($_SESSION['connect'])) {
        unset($_SESSION['connect']);
        session_destroy();
    }
    header('Location: ' . $chemin_page . '../connexion/');
    exit();
}

// Vérifier connexion
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        $bouton_connexion = "Se déconnecter";
    }
    else {
        $bouton_connexion = "Se connecter";
    }
}
else {
    $bouton_connexion = "Se connecter";
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - Produits bio</title>
        <meta name="description" content="Produits frais bio, commander maintenant !">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $chemin_page; ?>../images/icon.svg">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>../css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>../css/trumbowyg.min.css">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>../css/style.css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                
                <!-- Menu left -->
                <div class="col-md-3 col-lg-2 text-center pt-5 menu_admin">
                    <div>
                        <a class="navbar-brand" href="<?php echo $chemin_page; ?>../">
                            <img src="<?php echo $chemin_page; ?>../images/logo.svg" height="60" alt="logo">
                        </a>
                    </div><br><br>
                    <a class="btn bouton_admin size_m" href="<?php echo $chemin_page; ?>.">List produits</a><br>
                    <a class="btn bouton_admin size_m" href="<?php echo $chemin_page; ?>ajouter">Ajouter produits</a><br>
                    <a class="btn bouton_admin size_m" href="<?php echo $chemin_page; ?>valeurs">Modifier Nos valeurs</a><br>
                    <a class="btn bouton_admin size_m" href="<?php echo $chemin_page; ?>messages">Messages</a><br><br>
                    <form method="POST" action="">
                        <input class="btn bouton_green color_white" type="submit" name="connexion" value="<?php echo($bouton_connexion); ?>">
                    </form><br>
                </div>
                
                <!-- Contenu right -->
                <div class="col-md-9 col-lg-10 offset-md-3 offset-lg-2">
                    <div class="col-lg color_white align-self-center text-center pt-5">
                        <h1 class="font_hotel color_green"><?php echo $title_header; ?></h1>
                    </div>