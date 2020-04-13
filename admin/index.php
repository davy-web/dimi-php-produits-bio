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
    header('Location: ../connexion/');
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
        <title>Admin - Davy</title>
    </head>
    
    <body>
        <form method="POST" action="">
            <input type="submit" name="connexion" value="<?php echo($bouton_connexion); ?>"><br>
        </form>

<?php
if (isset($_SESSION['connect'])) {
    if ($_SESSION['connect'] == "connect") {
        include '../add-produits/index.php';
    }
}
?>

    </body>
</html>