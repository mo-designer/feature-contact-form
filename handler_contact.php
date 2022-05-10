<?php

session_start();

if (isset( $_POST['data-username'] ) && !empty( $_POST['data-username'])
&& isset( $_POST['data-mail'] ) && !empty( $_POST['data-mail'])
&& isset( $_POST['data-subject'] ) && !empty( $_POST['data-subject'])
&& isset( $_POST['data-message'] ) && !empty( $_POST['data-message'])) {

    $to = 'ananidijon21@yahoo.fr';
    $username = strip_tags($_POST['data-username']); 
    $mail = strip_tags($_POST['data-mail']);
    $subject = strip_tags($_POST['data-subject']);
    $message = $username .": " .strip_tags($_POST['data-message']);
    $headers = 'From: ' . $mail . "\r\n" .
    'Reply-To:' . $mail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    $_SESSION['info'] = "<p style='color:green'>Your message has been sent.</p>" ;
    header('Location: form_contact.php');

} else {

    $_SESSION['info'] = "<p style='color:red'>There is a problem, your message was not sent...</p>" ;
    header('Location: form_contact.php');

}



