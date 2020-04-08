<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - Davy</title>
    </head>
    
    <body>
        <form method="POST" action="">
            <input type="submit" name="deconnecter" value="Se déconnecter"><br>
        </form>
        
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        
        if($_POST) {
            if (isset($_SESSION['connect'])) {
                unset($_SESSION['connect']);
                session_destroy();
            }
        }
        
        if (isset($_SESSION['connect'])) {
            if ($_SESSION['connect'] == "connect") {
                echo("Vous êtes connecté");
            }
            else {
                echo("Vous êtes déconnecté");
            }
        }
        else {
            echo("Vous êtes déconnecté");
        }
        
        ?>
    </body>
</html>