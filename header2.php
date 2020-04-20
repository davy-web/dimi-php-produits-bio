<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title_page; ?></title>
        <meta name="description" content="Produits frais bio, commander maintenant !">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $chemin_page; ?>images/icon.png">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $chemin_page; ?>css/style.css">
    </head>

    <body>
        <header>
            <nav class="navbar fixed-top bg_dark">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo $chemin_page; ?>index.php">
                        <img src="<?php echo $chemin_page; ?>images/logo.png" height="60" alt="logo">
                    </a>
                    <div class="navbar-brand">
                        <a class="navbar-brand color_white" href="<?php echo $chemin_page; ?>">Accueil</a>
                        <a class="navbar-brand color_white" href="<?php echo $chemin_page; ?>produits/">Produits</a>
                        <a class="navbar-brand color_white" href="<?php echo $chemin_page; ?>valeurs/">Nos valeurs</a>
                        <a class="navbar-brand color_white" href="<?php echo $chemin_page; ?>contact/">Contact</a>
                    </div>
                </div>
            </nav>
            <div class="container-fluid fond_noir_0" style="height: 45vh;">
                <div class="container pt-5">
                    <div class="row pt-5">
                        <div class="col-lg color_white align-self-center text-center pt-5">
                            <h1 class="font_hotel color_green"><?php echo $title_header; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        