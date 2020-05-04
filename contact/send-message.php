<?php
$error = "";
include '../config.php';

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['mail'])) {
        // Vérifie Mail
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $result = $pdo->prepare('INSERT INTO davy_messages (nom, mail, sujet, message) VALUES (:nom, :mail, :sujet, :message)');
            $result->execute(array(
                'nom' => $_POST['nom'],
                'mail' => $_POST['mail'],
                'sujet' => $_POST['sujet'],
                'message' => $_POST['message']
            ));
            $error = "Le message a été envoyer !";
        }
        else {
            $error = "Adresse mail non valide";
        }
    }
    else {
        $error = "Veuillez remplir tous les champs";
    }
}
?>
        <!-- Formulaire Contact -->
        <div class="container rounded p-5 my-5">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nom" class="size_m color_green">Nom</label>
                                <input id="nom" class="input border_input" type="text" name="nom" placeholder="Votre nom" required><br><br>
                            </div>
                            <div class="col-md-6">
                                <label for="mail" class="size_m color_green">Email</label>
                                <input id="mail" class="input border_input" type="email" name="mail" placeholder="Votre adresse e-mail" required><br><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="sujet" class="size_m color_green">Sujet</label>
                                <input id="sujet" class="input border_input" type="text" name="sujet" placeholder="Votre sujet" required><br><br>
                                <label for="message" class="size_m color_green">Message</label>
                                <textarea id="message" placeholder="Ecrire votre message ici ..." tabindex="5" rows="10" class="input border_input" name="message" required></textarea><br>
                            </div>
                        </div>
                        <br><br>
                        <input type="submit" name="envoyer" value="Envoyer" class="btn bouton_green color_white">
                        <p class="color_red size_s py-5"><?php echo($error); ?></p>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>