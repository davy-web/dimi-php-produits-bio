<?php
$error = "";
include '../config.php';

if($_POST) {
    $result = $pdo->prepare('SELECT * FROM davy_users WHERE login = :login');
    $result->execute(array(
        'login' => $_POST['login']
    ));
    $ErrorCo = true;
    
    if (!empty($_POST['login'])) {
        while($users = $result->fetch(PDO::FETCH_ASSOC)){
            if (($_POST['login'] == "chendavyweb@gmail.com") && ($_POST['login'] == $users["login"]) && (password_verify($_POST['password'], $users["password"]))) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['connect'] = "connect";
                $ErrorCo = false;
                header('Location: ../admin/');
                exit();
            }
        }
        if ($ErrorCo == true) {
            $error = "Le mot de passe ou l'identifiant est faux";
        }
    }
    else {
        $error = "Veuillez remplir tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connexion - Davy</title>
    </head>
    
    <body>
        <form method="POST" action="">
            <label for="login">Login (E-mail)</label><br>
            <input type="text" id="login" name="login"><br><br>
            
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br><br>
            
            <input type="submit" name="connecter" value="Se connecter"><br>
            <p><?php echo($error); ?></p>
        </form>
        
    </body>
</html>