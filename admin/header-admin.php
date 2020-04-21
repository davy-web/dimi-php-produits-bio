<?php
$bouton_connexion = "Se déconnecter";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['connexion'])) {
    if (isset($_SESSION['connect'])) {
        unset($_SESSION['connect']);
        session_destroy();
    }
    header('Location: ' . $chemin_page . '../connexion/');
    exit();
}

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
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $chemin_page; ?>../images/icon.png">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>../css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>../css/style.css">
    </head>

    <body>
        <header>
            <nav class="navbar fixed-top bg_dark">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo $chemin_page; ?>../">
                        <img src="<?php echo $chemin_page; ?>../images/logo.png" height="60" alt="logo">
                    </a>
                    <div class="navbar-brand">
                        <form class="navbar-brand" method="POST" action="">
                            <input class="btn bouton_green" type="submit" name="connexion" value="<?php echo($bouton_connexion); ?>"><br>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container-fluid fond_noir_0" style="height: 40vh;">
                <div class="container pt-5">
                    <div class="row pt-5">
                        <div class="col-lg color_white align-self-center text-center pt-5">
                            <h1 class="font_hotel color_green"><?php echo $title_header; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid fond_green py-2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <a class="btn bouton_noir size_m" href="<?php echo $chemin_page; ?>.">List produits</a>
                    </div>
                    <div class="col-md">
                        <a class="btn bouton_noir size_m" href="<?php echo $chemin_page; ?>ajouter">Ajouter produits</a>
                    </div>
                    <div class="col-md">
                        <a class="btn bouton_noir size_m" href="<?php echo $chemin_page; ?>messages">Messages</a>
                    </div>
                </div>
            </div>
        </div>