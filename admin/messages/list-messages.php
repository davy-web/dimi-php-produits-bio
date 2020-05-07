<?php
$error = "";

// Supprimer messages
if (!empty($_GET['delete'])) {
    $result2 = $pdo->prepare('DELETE FROM davy_messages WHERE id = :id');
    $result2->execute(array(
        'id' => $_GET['delete']
    ));
    header('Location: .');
}
?>

                    <div class="container my-5 color_white">
                        <div class="row text-center p-1 color_green">
                            <p class="col-sm-2 size_s bg_grey m-0 p-3">Nom</p>
                            <p class="col-sm-2 size_s bg_grey2 m-0 p-3">Email</p>
                            <p class="col-sm-2 size_s bg_grey m-0 p-3">Sujet</p>
                            <p class="col-sm-4 size_s bg_grey2 m-0 p-3">Message</p>
                            <p class="col-sm-2 size_s bg_grey m-0 p-3">Supprimer</p>
                        </div>
                        
                        <?php
                        // Afficher messages
                        $result = $pdo->query("SELECT * FROM davy_messages");
                        while ($message = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        
                        <div class="row text-center p-1">
                            <p class="col-sm-2 size_s bg_grey color_black m-0 p-3"><?php echo $message["nom"]; ?></p>
                            <p class="col-sm-2 size_s bg_grey2 color_black m-0 p-3"><?php echo $message["mail"]; ?></p>
                            <p class="col-sm-2 size_s bg_grey color_black m-0 p-3"><?php echo $message["sujet"]; ?></p>
                            <p class="col-sm-4 size_s bg_grey2 color_black m-0 p-3"><?php echo $message["message"]; ?></p>
                            <a href="?delete=<?php echo $message["id"]; ?>" class="col-sm-2 size_s bg_grey color_black m-0 p-3">Supprimer</a>
                        </div>
                        
                        <?php
                        }
                        ?>
                    
                    </div>