<?php

$to      = 'ananidijon21@yahoo.fr';
$username = strip_tags($_POST['data-username']); 
$mail = strip_tags($_POST['data-mail']);
$subject = strip_tags($_POST['data-subject']);
$message = $username .": " .strip_tags($_POST['data-message']);
$headers = 'From: ' . $mail . "\r\n" .
'Reply-To:' . $mail . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);