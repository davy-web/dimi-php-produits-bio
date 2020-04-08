<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connection - Davy</title>
    </head>
    
    <body>
        <form method="POST" action="">
            <label for="login">Login (E-mail)</label><br>
            <input type="text" id="login" name="login"><br><br>
            
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br><br>
            
            <input type="submit" name="connecter" value="Se connecter"><br>
        </form>
        
        <?php
        if($_POST) {
            $pdo = new PDO('mysql:host=localhost;dbname=davy_admin', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $result = $pdo->prepare('SELECT * FROM davy_users WHERE login = :login');
            $result->execute(array(
                'login' => $_POST['login']
            ));
            
            $ErrorCo = true;
            if (!empty($_POST['login'])) {
                while($users = $result->fetch(PDO::FETCH_ASSOC)){
                    if (($_POST['login'] == $users["login"]) && (password_verify($_POST['password'], $users["password"]))) {
                        echo("Bienvenue!");
                        if (!isset($_SESSION)) {
                            session_start();
                        }
                        $_SESSION['connect'] = "connect";
                        $ErrorCo = false;
                    }
                }
                if ($ErrorCo == true) {
                    echo("Le mot de passe ou l'identifiant est faux");
                }
            }
            else {
                echo("Le login doit être une adresse e-mail");
            }
        }
        ?>
    </body>
</html>