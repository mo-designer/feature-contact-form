<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact form with handler in php.">
    <title>Form Contact</title>
</head>
<body>

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
        <input type="submit" value="Send">
    </p>
</form>
    
</body>
</html>