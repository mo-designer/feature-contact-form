<?php

session_start();

echo $_POST['data_username'] . '<br>' . $_POST['data_email'] . '<br>' . $_POST['data_subject'] . '<br>' . $_POST['data_message'];

$to      = 'ananidijon21@yahoo.fr';
$subject = $_POST['data_subject'] ;
$message = $_POST['data_username'] . ' : ' .$_POST['data_message'];
$headers = array(
    'From' =>  $_POST['data_email'],
    'Reply-To' =>  $_POST['data_email'],
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
$_SESSION['success'] = "Votre email a été envoyé !" ;
header('Location: form_contact.php');

