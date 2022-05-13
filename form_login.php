<?php include("include_header.php") ?>
<form action="handler_login.php" method="post">

<p>
    <label for="">Nom :</label>
    <input type="text" name="data-username">
</p>
<p>
    <label for="">Mot de passe :</label>
    <input type="password" name="data-password">
</p>
<p>
    <input type="submit" value="Se connecter">
</p>
</form>
<?php include("include_footer.php") ?>