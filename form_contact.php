<?php include("include_header.php") ?>

<p>
<?php
    if ($_SESSION) {
        echo $_SESSION['info'] ;
        unset($_SESSION['info']);
    }
?>
</p>

<form action="handler_contact.php" method="post">
    <p>
        <label for="input-username">Name:</label>
        <input type="text" id="input-username" name="data-username">
    </p>
    <p>
        <label for="input-mail">Mail:</label>
        <input type="email" id="input-mail" name="data-mail">
    </p>
    <p>
        <label for="input-subject">Subject:</label>
        <input type="text" id="input-subject" name="data-subject">
    </p>
    <p>
        <label for="input-message">Message:</label>
        <textarea name="data-message" id="input-message" cols="30" rows="10"></textarea>
    </p>

    <p>
        <input type="submit" value="Send" name="data-submit">
    </p>
</form>
<a href="index.php"><button>Retour</button></a>  
<?php include("include_footer.php") ?>