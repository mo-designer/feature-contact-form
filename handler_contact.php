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
    $message = strip_tags($_POST['data-message']);
    $headers = 'From: ' . $mail . "\r\n" .
    'Reply-To:' . $mail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    require_once("db_connect.php");
    $sql='INSERT INTO `tbl_contact` (`contact_username`, `contact_mail`, `contact_subject`, `contact_message`) VALUES (:contact_username, :contact_mail, :contact_subject, :contact_message);';
    $query = $dbh->prepare($sql);
    $query->bindValue(':contact_username', $username, PDO::PARAM_STR);
    $query->bindValue(':contact_mail', $mail, PDO::PARAM_STR);
    $query->bindValue(':contact_subject', $subject, PDO::PARAM_STR);
    $query->bindValue(':contact_message', $message, PDO::PARAM_STR);
    $query->execute();


    $_SESSION['info'] = "<p style='color:green'>Your message has been sent.</p>" ;
    header('Location: form_contact.php');

} else {


    $_SESSION['info'] = "<p style='color:red'>There is a problem, your message was not sent...</p>" ;
    header('Location: form_contact.php');

}



