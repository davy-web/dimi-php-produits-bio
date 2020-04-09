<?php
$error = "";
$bouton_connexion = "Se déconnecter";

if (!isset($_SESSION)) {
    session_start();
}

if ($_POST) {
    if (isset($_SESSION['connect'])) {
        unset($_SESSION['connect']);
        session_destroy();
    }
    header('Location: ../connexion/');
    exit();
}

if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        $bouton_connexion = "Se déconnecter";
        $error = "Vous êtes connecté";
    }
    else {
        $bouton_connexion = "Se connecter";
        $error = "Vous êtes déconnecté";
    }
}
else {
    $bouton_connexion = "Se connecter";
    $error = "Vous êtes déconnecté";
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - Davy</title>
    </head>
    
    <body>
        <form method="POST" action="">
            <input type="submit" name="connexion" value="<?php echo($bouton_connexion); ?>"><br>
            <p><?php echo($error); ?></p>
        </form>
        
    </body>
</html>