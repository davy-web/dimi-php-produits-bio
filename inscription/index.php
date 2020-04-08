<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inscription - Davy</title>
    </head>
    
    <body>
        <form method="POST" action="">
            <label for="login">Login (E-mail)</label><br>
            <input type="text" id="login" name="login"><br><br>
            
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br><br>
            
            <label for="confirm_password">Confirm password</label><br>
            <input type="password" id="confirm_password" name="confirm_password"><br><br>
            
            <input type="submit" name="inscrire" value="S'inscrire"><br>
        </form>
        
        <?php 
        $pdo = new PDO('mysql:host=localhost;dbname=davy_admin;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        
        if($_POST) {
            if (!empty($_POST['login'])) {
                if (filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)) {
                    if (strlen($_POST['password']) >= 8) {
                        if ($_POST['password'] == $_POST['confirm_password']) {
                            // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
                            $result = $pdo->prepare('INSERT INTO davy_users (login, password) VALUES (:login, :password)');
                            // On remplace les éléments préparés par les données envoyées par le formulaire
                            $result->execute(array(
                                'login' => $_POST['login'],
                                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
                            ));
                            echo("Enregister!");
                        }
                        else {
                            echo("Les mots de passe saisis ne sont pas identiques");
                        }
                    }
                    else {
                        echo("Le mot de passe doit comporter au minimum 8 caractères");
                    }
                }
                else {
                    echo("Le login doit être une adresse e-mail");
                }
            }
        } 
        ?>
    </body>
</html>