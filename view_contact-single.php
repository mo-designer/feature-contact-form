<?php

require_once("db_connect.php");
$sql='SELECT contact_id FROM `tbl_contact` ';
$query = $dbh->prepare($sql);
$query->execute();
$contacts=$query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($contacts);
//echo "<br>";
$contact_id=strip_tags($_GET['contact_id']);
//echo $contact_id;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

<?php
if (isset( $_GET['contact_id'] ) && !empty( $_GET['contact_id'])) {
    foreach ($contacts as $contact_key ) {
        // echo $contact["contact_id"];
         if ($contact_key["contact_id"]==$contact_id) {
            $sql= 'SELECT * FROM `tbl_contact` WHERE `contact_id`=:contact_id';
            $query = $dbh->prepare($sql);
            $query->bindValue(':contact_id', $contact_id, PDO::PARAM_INT);
            $query->execute();
            $contact=$query->fetch();
            echo '<h1>'.$contact["contact_subject"].'</h1>';
            echo '<p>Auteur : '. $contact["contact_username"] ; 
            echo '<p>Email : <a href="mailto:'.$contact["contact_mail"] .'">' .$contact["contact_mail"] .'</a> </p>';
            echo '<p>Message :  </p>';
            echo '<p>'. $contact["contact_message"] . '</p>';
         }else {
            // echo "problem";
        }
    }  
}else {
    echo "non";
}
?>




</body>
</html>