<?php

$username = strip_tags($_POST['data-username']); 
$mail = strip_tags($_POST['data-mail']);
$subject = strip_tags($_POST['data-subject']);
$message = strip_tags($_POST['data-message']);
// strip_tags : supprime les balises HTML et PHP d'une chaîne

