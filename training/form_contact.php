<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulaire de contact et traitement en PHP.">
    <title>Formulaire de Contact</title>
</head>
<body>
    <p style="color:green">
        <?php 
        if ($_SESSION) {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
        ?>
    </p>
    <form action="handler_contact.php" method="post">
        <label for="input_username">Nom :</label>
        <input type="text" id="input_username" name="data_username">
        <label for="input_email">Mail :</label>
        <input type="text" id="input_email" name="data_email">
        <label for="input_subject">Sujet :</label>
        <input type="text" id="input_subject" name="data_subject">
        <label for="input_message">Message</label>
        <textarea name="data_message" id="input_message" cols="50" rows="1"></textarea>
        <input type="submit">
    </form>
</body>
</html>